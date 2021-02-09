<?php

namespace App\Http\Controllers\AdminController;

use App\Certification;
use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = DB::table('admins')->count();
        return view('admin.home', compact('admins'));
    }

    /**
     *  edit the payment status
     * @bank_payments_edit
     */
    public function bank_payments_edit($id)
    {
        $bank = Order::findOrFail($id);
        return view('admin.payments.edit_bank_payment', compact('bank'));
    }

    /**
     *  update the bank payment status
     * @bank_payments_update
     */
    public function bank_payments_update(Request $request, $id)
    {
        // dd($request->all());
        $bank = Order::findOrFail($id);
        $bank->update([
            'status' => '1',
        ]);
        flash('تم الدفع بنجاح');
        return redirect()->route('orders.index');
    }
}