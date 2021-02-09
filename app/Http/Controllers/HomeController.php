<?php

namespace App\Http\Controllers;

use App\City;
use App\Order;
use App\Setting;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth')->except(['index', 'search', 'pageIndex', 'postOrder', 'postContacts', 'getContacts']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $things = Cache::remember('things', 30, function () {
            return
                [
                    'cities'  => City::latest()->get(),
                    'setting' => Setting::first(),
                    'sliders' => Slider::latest()->get(),
                ];
        });

        return view('welcome', compact('things'));
    }


    public function postOrder(Request $request)
    {
        $rules = [
            'name'           => 'required',
            'phone'          => 'required',
            'email'          => 'required',
            'city_id'        => 'required',
            'description'    => 'required',
            'payment_method' => 'required',
        ];
        $this->validate($request, $rules);
        // dd($request->payment_method);
        $cash = Setting::pluck('payment_value')->first() ?? 200;
        $order = Order::create([
            'name'           => $request->name,
            'phone'          => $request->phone,
            'email'          => $request->email,
            'city_id'        => $request->city_id,
            'description'    => $request->description,
            'price'          => $cash,
        ]);


        $data = "{\"PaymentMethodId\":\"$request->payment_method\",\"CustomerName\": \"$request->name\",\"DisplayCurrencyIso\": \"SAR\",
        \"MobileCountryCode\":\"+966\",\"CustomerMobile\": \"$request->phone_number\",
        \"CustomerEmail\": \"email@mail.com\",\"InvoiceValue\": $cash,\"CallBackUrl\": \"http://127.0.0.1:8000/check-status\",
        \"ErrorUrl\": \"http://127.0.0.1:8000/check-status\",\"Language\": \"ar\",\"CustomerReference\" :\"ref 1\",
        \"CustomerCivilId\":12345678,\"UserDefinedField\": \"Custom field\",\"ExpireDate\": \"\",
        \"CustomerAddress\" :{\"Block\":\"\",\"Street\":\"\",\"HouseBuildingNo\":\"\",\"Address\":\"\",\"AddressInstructions\":\"\"},
        \"InvoiceItems\": [{\"ItemName\": \"$request->name\",\"Quantity\": 1,\"UnitPrice\": $cash}]}";

        $fatooraRes = MyFatoorah($data);
        $result = json_decode($fatooraRes);
        // dd($result);
        if ($result != null && $result->IsSuccess === true) {
            $order->update([
                'invoice_id' => $result->Data->InvoiceId
            ]);

            return redirect($result->Data->PaymentURL);
        } else {
            flash('تم استلام طلبك ولكن هناك مشكلة في خدمة الدفع رقم الطلب هو '.$order->id)->error();
        }
    }

    public function fatooraStatus($id = null)
    {
        $PaymentId = \Request::query('paymentId');
        $phone = Setting::pluck('phone')->first();
        $resData = MyFatoorahStatus($PaymentId);
        $result = json_decode($resData);
        // dd($result);
        if ($result != null && $result->IsSuccess === true && $result->Data->InvoiceStatus === "Paid") {
            $InvoiceId = $result->Data->InvoiceId;
            $order = Order::where('invoice_id', $InvoiceId)->first();
            $order->update(['status' => '1']);
            $message = 'طلب استشارة جديدة من : '.$order->name;
            return redirect("https://api.whatsapp.com/send?phone=$phone&text=$message");
        // return redirect()->to('/fatoora/success');
        } else {
            return redirect()->to('/fatoora/error');
        }
    }
}