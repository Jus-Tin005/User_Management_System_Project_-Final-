<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $orders = Order::where('order_id',Auth::user()->id)->orderBy('created_at', 'asc')->paginate(5);
        return view('home',compact('orders'));
    }



    public function show($orderId)
    {
        $order = Order::where('order_id',Auth::user()->id)->where('id',$orderId)->first();
        if($order){
            return view('orders.view',compact('order'));
        }else{
            return redirect()->back()->with('message','Not Found Orders');
        }

    }


}
