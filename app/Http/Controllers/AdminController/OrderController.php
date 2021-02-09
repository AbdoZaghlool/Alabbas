<?php

namespace App\Http\Controllers\AdminController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;

class OrderController extends Controller
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
     * get all new orders which not paid yet
     *
     * @return void
     */
    public function orders()
    {
        $orders = Order::with('city')->where('status', '0')->get();
        return view('admin.orders.index', compact('orders'));
    }

    public function paidOrders()
    {
        $orders = Order::with('city')->where('status', '1')->get();
        return view('admin.orders.paid', compact('orders'));
    }

    public function canceledOrders()
    {
        $orders = Order::with('city')->where('status', '2')->get();
        return view('admin.orders.canceled', compact('orders'));
    }


    public function showOrder($id)
    {
        $order = Order::find($id);
        return view('admin.orders.show', compact('order'));
    }

    public function deleteOrder($id)
    {
        $order = Order::find($id);
        $order->update(['status' => '2']);
        flash('تم الغاء الطلب')->warning();
        return back();
    }
}