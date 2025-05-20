@extends('layouts.app')

@section('content')
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="page-name">Dashboard</h1>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">my account</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="user-dashboard page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="list-inline dashboard-menu text-center">
                        <li><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                        <li><a class="active" href="{{ route('dashboard.orders') }}">Orders</a></li>
                        <li><a href="{{ route('dashboard.address') }}">Address</a></li>
                        <li><a href="{{ route('dashboard.profileDetails') }}">Profile Details</a></li>
                    </ul>
                    <div class="dashboard-wrapper user-dashboard">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Date</th>
                                        <th>Items</th>
                                        <th>Total Price</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (auth()->user()->orders as $order)

                                    {{-- @dd($order->products) --}}

                                        <x-orders :id="$order->id" :date="$order->created_at" items="44" :total="$order->total_amount"
                                            :status="$order->status" :orderid="$order->id"  />
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
