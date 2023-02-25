@extends('layouts.app')
@section('admin')

<div class="main-content">
                                <div class="rows">
                                        <div class="cols-12">
                                                <div class="box box-hover">
                                                        <div class="box-header">My Orders Details</div>
                                                        <a href="{{route('home')}}" class="btn btn-primary waves-effect waves-light">Back</a>
                                                        <div class="rows">
                                                                <div class="cols-6">
                                                                        <h5>Order Details</h5>
                                                                        <hr class="ruler">
                                                                        <h6>Ordered ID : {{ $order->id}}</h6>
                                                                        <h6>Tracking No : {{ $order->tracking_no}}</h6>
                                                                        <h6 class="border p-2 text-success">
                                                                                Ordered Status : <span class="text-uppercase">{{ $order->order_status}}</span>
                                                                        </h6>
                                                                        <h6>Pyment Status : {{ $order->payment_status}}</h6>
                                                                        <h6>Ordered Date : {{ $order->created_at->format('d-m-Y h:i A')}}</h6>
                                                                </div>
                                                                <div class="cols-6">
                                                                        <h5>User Details</h5>
                                                                        <hr class="ruler">
                                                                        <h6>Full Name : {{ $order->fullname}}</h6>
                                                                        <h6>Phone No : {{ $order->phone}}</h6>
                                                                        <h6>Email : {{ $order->email}}</h6>
                                                                        <h6>Address : {{ $order->address}}</h6>
                                                                        <h6>Pincode : {{ $order->pincode</h6>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
</div>
@endsection

