@extends('layouts.app')

@section('content')
    <div class="dashboard-wrapper user-dashboard">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Color</th>
                        <th>Size</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($order->products as $orderProduct)
                        <tr>
                            <td>{{ $orderProduct->id }}</td>
                            <td>{{ $orderProduct->name }}</td>
                            <td>{{ $orderProduct->pivot->quantity }}</td>
                            <td>${{ $orderProduct->pivot->price }}</td>
                            <td>${{ $orderProduct->pivot->color }}</td>
                            <td>${{ $orderProduct->pivot->size }}</td>
                            <td><span class="label label-primary">Pending</span></td>

                        </tr>
                    @endforeach





                </tbody>
            </table>
        </div>
    </div>
@endsection
