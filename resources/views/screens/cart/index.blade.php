@extends('layouts.app')

@section('content')
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="page-name">Cart</h1>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('home') }}"></a></li>
                            <li class="active">cart</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- @dd($cart) --}}
    <div class="page-wrapper">
        <div class="cart shopping">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="block">
                            <div class="product-list">
                                <form method="post">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="">Item Name</th>
                                                <th class="">Color</th>
                                                <th class="">Size</th>
                                                <th class="">Quantity</th>
                                                <th class="">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cart->products as $product)
                                                <x-cart :name="$product->name" :color="$product->pivot->color" :size="$product->pivot->size"
                                                    :id="$product->pivot->id" :quantity="$product->pivot->quantity" />
                                            @endforeach

                                        </tbody>
                                    </table>
                                    <a href="{{ route('checkout') }}" class="btn btn-main pull-right">Checkout</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
