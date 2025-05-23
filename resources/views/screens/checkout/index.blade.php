@extends('layouts.app')

@section('content')
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="page-name">Checkout</h1>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li class="active">checkout</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="page-wrapper">
        <div class="checkout shopping">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="block billing-details">
                            <h4 class="widget-title">Billing Details</h4>
                            <form class="checkout-form" method="POST" action="{{ route('checkout.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="full_name">Full Name</label>
                                    <input type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{ old('full_name') }}" id="full_name"
                                        placeholder="">
                                    @error('full_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="user_address">Address</label>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" id="address" placeholder="">

                                    @error('address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="checkout-country-code clearfix">

                                    <div class="form-group">
                                        <label for="user_post_code">Zip Code</label>
                                        <input type="text" class="form-control @error('zip_code') is-invalid @enderror" id="user_post_code" value="{{ old('zip_code') }}" name="zip_code"
                                            value="">

                                            @error('zip_code')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="user_city">City</label>
                                        <input type="text" class="form-control @error('city') is-inavlid @enderror" value="{{ old('city') }}" id="user_city" name="city"
                                            value="">
                                            @error('city')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="user_country">Country</label>
                                    <input type="text" class="form-control @error('country') is-invalid @enderror" id="user_country" value="{{ old('country') }}" name="country"
                                        placeholder="">
                                        @error('country')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                </div>

                                <input type="submit" class="btn btn-main mt-20" value="Place Order">
                            </form>
                        </div>
                        {{-- <div class="block">
                            <h4 class="widget-title">Payment Method</h4>
                            <p>Credit Cart Details (Secure payment)</p>
                            <div class="checkout-product-details">
                                <div class="payment">
                                    <div class="card-details">
                                        <form class="checkout-form">
                                            <div class="form-group">
                                                <label for="card-number">Card Number <span class="required">*</span></label>
                                                <input id="card-number" class="form-control" type="tel"
                                                    placeholder="•••• •••• •••• ••••">
                                            </div>
                                            <div class="form-group half-width padding-right">
                                                <label for="card-expiry">Expiry (MM/YY) <span
                                                        class="required">*</span></label>
                                                <input id="card-expiry" class="form-control" type="tel"
                                                    placeholder="MM / YY">
                                            </div>
                                            <div class="form-group half-width padding-left">
                                                <label for="card-cvc">Card Code <span class="required">*</span></label>
                                                <input id="card-cvc" class="form-control" type="tel" maxlength="4"
                                                    placeholder="CVC">
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                    <div class="col-md-4">
                        <h4>Order Summary</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cart->products as $product)
                                    <tr>
                                        <th scope="row">x{{ $product->pivot->quantity }}</th>
                                        <td style="white-space: nowrap">{{ $product->name }}</td>
                                        <td>{{ $product->pivot->color }}</td>
                                        <td>{{ $product->pivot->size }}</td>
                                        <td>${{ $product->pivot->quantity * $product->price }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Delivery</th>
                                    <td>${{ $delivery }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Discount</th>
                                    <td>0.00</td>
                                </tr>

                                <tr>
                                    <th scope="row">Total</th>
                                    <td>${{ $subTotal }}</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                    {{-- <div class="col-md-4">
               <div class="product-checkout-details">
                  <div class="block">
                     <h4 class="widget-title">Order Summary</h4>
                     <div class="media product-card">
                        <a class="pull-left" href="product-single.html">
                           <img class="media-object" src="{{ asset('assets/web/images/shop/cart/cart-1.jpg') }}" alt="Image" />
                        </a>
                        <div class="media-body">
                           <h4 class="media-heading"><a href="product-single.html">Ambassador Heritage 1921</a></h4>
                           <p class="price">1 x $249</p>
                           <span class="remove" >Remove</span>
                        </div>
                     </div>
                     <div class="discount-code">
                        <p>Have a discount ? <a data-toggle="modal" data-target="#coupon-modal" href="#!">enter it here</a></p>
                     </div>
                     <ul class="summary-prices">
                        <li>
                           <span>Subtotal:</span>
                           <span class="price">$190</span>
                        </li>
                        <li>
                           <span>Shipping:</span>
                           <span>Free</span>
                        </li>
                     </ul>
                     <div class="summary-total">
                        <span>Total</span>
                        <span>$250</span>
                     </div>
                     <div class="verified-icon">
                        <img src="{{ asset('assets/web/images/shop/verified.png') }}">
                     </div>
                  </div>
               </div>
            </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="coupon-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Enter Coupon Code">
                        </div>
                        <button type="submit" class="btn btn-main">Apply Coupon</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
