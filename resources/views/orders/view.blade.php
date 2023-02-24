@extends('layouts.app')
@section('admin')
<div class="main-content">
                                <div class="rows">
                                        <div class="cols-12">
                                                <div class="box box-hover">
                                                        <div class="box-header">My Orders Details</div>
                                                        <a href="{{route('home')}}" class="btn btn-primary waves-effect waves-light">Back</a>
                                                        <div class="rows">
                                                                <div class="cols-12">
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
                                                        </div>
                                                </div>
                                        </div>
                                </div>
</div>

@endsection

<!-- =================================== -->

<div class="box-body overflow-scrolls">
                                                                <table>
                                                                        <thead>
                                                                                <tr>
                                                                                        <th>ID</th>
                                                                                        <th>Customer Name</th>
                                                                                        <th>Tracking No</th>
                                                                                        <th>Order Status</th>
                                                                                        <th>Pyment Status</th>
                                                                                        <th>Date</th>
                                                                                        <th>Action</th>
                                                                                </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                                        @forelse ($orders as $item)
                                                                                                        <tr>
                                                                                                                <td>{{ $item->id}}</td>
                                                                                                                <td class="order-owner">{{ $item->fullname}}</td>
                                                                                                                <td>{{ $item->tracking_no}}</td>
                                                                                                                <td class="order-status">{{ $item->order_status}}</td>
                                                                                                                <td class="payment-status  vertical-center">
                                                                                                                        <div class="dot"></div>
                                                                                                                        {{ $item->payment_status}}
                                                                                                                </td>
                                                                                                                <td>{{ $item->created_at->format('d-m-Y')}}</td>
                                                                                                                <td> <a href="{{ url('orders/' . $item->id) }}" class="btn btn-info btn-rounded waves-effect">View</a></td>
                                                                                                        </tr>
                                                                                        @empty
                                                                                                        <tr>
                                                                                                                <td colspan="7">No Orders Available Right Now</td>
                                                                                                        </tr>
                                                                                        @endforelse

                                                                                </tbody>
                                                                </table>
                                                                <div>{{$orders->links()}}</div>
                                                        </div>