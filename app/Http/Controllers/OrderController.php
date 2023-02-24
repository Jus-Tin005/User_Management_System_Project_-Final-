<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use App\Models\Order;
// use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
        public function orders(){
            // $orders = Order::where('user_id',Auth::user()->id)->orderBy('created_at', 'desc')->paginate('5');
            // return view('home', compact('orders'));

        }
}
