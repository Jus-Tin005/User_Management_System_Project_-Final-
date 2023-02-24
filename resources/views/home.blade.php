
@extends('layouts.app')
@section('admin')
<div class="main-content">
                                <!----------------------------------
                                        * First Row In  Main Content    *
                                ------------------------------------>
                                <div class="rows">
                                        <div class="cols-3 cols-md-6 cols-sm-12">
                                              <div class="box box-hover">
                                                        <div class="counter">
                                                                <div class="counter-title">
                                                                        <span>Total Sales</span>
                                                                </div>
                                                                <div class="counter-info flex-between">
                                                                        <div class="counter-counter">
                                                                               Kyats10,00000
                                                                        </div>
                                                                        <i class="fas fa-balance-scale"></i>
                                                                </div>
                                                        </div>
                                              </div>
                                        </div>
                                        <div class="cols-3 cols-md-6 cols-sm-12">
                                                <div class="box box-hover">
                                                        <div class="counter">
                                                                <div class="counter-title">
                                                                        <span>Total Expenses</span>
                                                                </div>
                                                                <div class="counter-info flex-between">
                                                                        <div class="counter-counter">
                                                                                Kyats 500,000
                                                                        </div>
                                                                        <i class="fas fa-hand-holding-usd"></i>
                                                                </div>
                                                        </div>
                                              </div>
                                        </div>
                                        <div class="cols-3 cols-md-6 cols-sm-12">
                                                <div class="box box-hover">
                                                        <div class="counter">
                                                                <div class="counter-title">
                                                                        <span>Total Income</span>
                                                                </div>
                                                                <div class="counter-info flex-between">
                                                                        <div class="counter-counter">
                                                                                Kyats 12,00000
                                                                        </div>
                                                                        <i class="fas fa-chart-line"></i>
                                                                </div>
                                                        </div>
                                              </div>
                                        </div>
                                        <div class="cols-3 cols-md-6 cols-sm-12">
                                                <div class="box box-hover">
                                                        <div class="counter">
                                                                <div class="counter-title">
                                                                        <span>Daily Visitors</span>
                                                                </div>
                                                                <div class="counter-info flex-between">
                                                                        <div class="counter-counter">
                                                                                5077
                                                                        </div>
                                                                        <i class="fas fa-user"></i>
                                                                </div>
                                                        </div>
                                              </div>
                                        </div>
                                </div>
                                <!----------------------------------
                                        * Second Row In  Main Content    *
                                ------------------------------------>
                                <div class="rows">
                                        <div class="cols-3 cols-md-6 cols-sm12">
                                                <div class="box box-hover top-height">
                                                        <div class="box-header">
                                                                Top Products
                                                        </div>
                                                        <div class="box-body">
                                                                <ul class="product-list">
                                                                        <li class="products-list-item flex-between">
                                                                                <div class="item-info vertical-center">
                                                                                        <img src="{{asset('backend/assets/images/jacket.jpg')}}" alt="p-1">
                                                                                        <div class="item-name">
                                                                                                <div class="product-name">Jacket</div>
                                                                                                <div class="product-content">Clothes</div>
                                                                                        </div>
                                                                                </div>
                                                                                <div class="item-sales-info">
                                                                                        <div class="product-content">Sales</div>
                                                                                        <div class="product-sales">15,000</div>
                                                                                </div>
                                                                        </li>
                                                                        <li class="products-list-item flex-between">
                                                                                <div class="item-info vertical-center">
                                                                                        <img src="{{asset('backend/assets/images/hoodie.jpg')}}" alt="p-2">
                                                                                        <div class="item-name">
                                                                                                <div class="product-name">Hoodie</div>
                                                                                                <div class="product-content">Clothes</div>
                                                                                        </div>
                                                                                </div>
                                                                                <div class="item-sales-info">
                                                                                        <div class="product-content">Sales</div>
                                                                                        <div class="product-sales">20,000</div>
                                                                                </div>
                                                                        </li>
                                                                        <li class="products-list-item flex-between">
                                                                                <div class="item-info vertical-center">
                                                                                        <img src="{{asset('backend/assets/images/sweater.jpg')}}" alt="p-3">
                                                                                        <div class="item-name">
                                                                                                <div class="product-name">Sweater</div>
                                                                                                <div class="product-content">Clothes</div>
                                                                                        </div>
                                                                                </div>
                                                                                <div class="item-sales-info">
                                                                                        <div class="product-content">Sales</div>
                                                                                        <div class="product-sales">30,000</div>
                                                                                </div>
                                                                        </li>
                                                                        <li class="products-list-item flex-between">
                                                                                <div class="item-info vertical-center">
                                                                                        <img src="{{asset('backend/assets/images/t-shirt.jpg')}}" alt="p-4">
                                                                                        <div class="item-name">
                                                                                                <div class="product-name">T-shirt</div>
                                                                                                <div class="product-content">Clothes</div>
                                                                                        </div>
                                                                                </div>
                                                                                <div class="item-sales-info">
                                                                                        <div class="product-content">Sales</div>
                                                                                        <div class="product-sales">8,000</div>
                                                                                </div>
                                                                        </li>
                                                                        <li class="products-list-item flex-between">
                                                                                <div class="item-info vertical-center">
                                                                                        <img src="{{asset('backend/assets/images/imrolex.jpg')}}" alt="p-5">
                                                                                        <div class="item-name">
                                                                                                <div class="product-name">Rolex</div>
                                                                                                <div class="product-content">Watch</div>
                                                                                        </div>
                                                                                </div>
                                                                                <div class="item-sales-info">
                                                                                        <div class="product-content">Sales</div>
                                                                                        <div class="product-sales">$100,000</div>
                                                                                </div>
                                                                        </li>

                                                                </ul>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="cols-4 cols-md-6 cols-sm12">
                                                <div class=" box-hover sale-analytics">
                                                                <h2 class="box-header">Sales Analytics</h2>
                                                                <div class="sale-analytics-item vertical-center online">
                                                                                <div class="analytics-icon">
                                                                                        <i class="fas fa-shopping-cart"></i>
                                                                                </div>
                                                                                <div class="analytics-right">
                                                                                        <div class="analytics-info">
                                                                                                <h3>ONLINE ORDERS</h3>
                                                                                                <small class="text-muted">Last 24 Hours </small>
                                                                                        </div>
                                                                                        <h5 class="percent-plus">+50%</h5>
                                                                                        <h3>3000</h3>
                                                                                </div>
                                                                </div>
                                                                <div class="sale-analytics-item vertical-center offline">
                                                                                <div class="analytics-icon">
                                                                                        <i class="fas fa-shopping-bag"></i>
                                                                                </div>
                                                                                <div class="analytics-right">
                                                                                        <div class="analytics-info">
                                                                                                <h3>OFFLINE ORDERS</h3>
                                                                                                <small class="text-muted">Last 24 Hours </small>
                                                                                        </div>
                                                                                        <h5 class="percent-minus">-25%</h5>
                                                                                        <h3>246</h3>
                                                                                </div>
                                                                </div>
                                                                <div class="sale-analytics-item vertical-center customers">
                                                                                <div class="analytics-icon">
                                                                                        <i class="fas fa-users"></i>
                                                                                </div>
                                                                                <div class="analytics-right">
                                                                                        <div class="analytics-info">
                                                                                                <h3>NEW CUSTOMERS</h3>
                                                                                                <small class="text-muted">Last 24 Hours </small>
                                                                                        </div>
                                                                                        <h5 class="percent-plus">+45%</h5>
                                                                                        <h3>568</h3>
                                                                                </div>
                                                                </div>
                                                </div>
                                        </div>
                                        <div class="cols-5 cols-md-6 cols-sm12">
                                                <div class="box box-hover top-height">
                                                        <div class="box-header">Customers</div>
                                                        <div class="box-body">
                                                                <div id="customer-chart"></div>
                                                        </div>
                                                </div>
                                        </div>
                                        <!----------------------------------
                                                * Recent Orders In  Main Content    *
                                        ------------------------------------>
                                        <div class="cols-12">
                                                <div class="box box-hover">
                                                        <div class="box-header">Recent Orders</div>
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
                                                </div>
                                        </div>
                                </div>
</div>

@endsection
