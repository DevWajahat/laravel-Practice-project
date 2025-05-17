@extends('layouts.app')

@section('content')
    {{-- @dd($product->category) --}}

    <section class="single-product">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('products.index') }}">Shop</a></li>
                        <li class="active">Single Product</li>
                    </ol>
                </div>
                <div class="col-md-6">
                    <ol class="product-pagination text-right">
                        <li><a href="{{ route('blogs.index') }}"><i class="tf-ion-ios-arrow-left"></i> Next </a></li>
                        <li><a href="{{ route('blogs.index') }}">Preview <i class="tf-ion-ios-arrow-right"></i></a></li>
                    </ol>
                </div>
            </div>
            <div class="row mt-20">
                <div class="col-md-5">
                    <div class="single-product-slider">
                        <div id='carousel-custom' class='carousel slide' data-ride='carousel'>
                            <div class='carousel-outer'>
                                <!-- me art lab slider -->
                                <div class='carousel-inner '>
                                    <div class='item active'>
                                        <img src='{{ asset('assets/web/images/shop/single-products/product-1.jpg') }}'
                                            alt='' data-zoom-image="images/shop/single-products/product-1.jpg" />
                                    </div>
                                    <div class='item'>
                                        <img src='{{ asset('assets/web/images/shop/single-products/product-2.jpg') }}'
                                            alt='' data-zoom-image="images/shop/single-products/product-2.jpg" />
                                    </div>

                                    <div class='item'>
                                        <img src='{{ asset('assets/web/images/shop/single-products/product-3.jpg') }}'
                                            alt='' data-zoom-image="images/shop/single-products/product-3.jpg" />
                                    </div>
                                    <div class='item'>
                                        <img src='{{ asset('assets/web/shop/single-products/product-4.jpg') }}'
                                            alt='' data-zoom-image="images/shop/single-products/product-4.jpg" />
                                    </div>
                                    <div class='item'>
                                        <img src='{{ asset('assets/web/images/shop/single-products/product-5.jpg') }}'
                                            alt='' data-zoom-image="images/shop/single-products/product-5.jpg" />
                                    </div>
                                    <div class='item'>
                                        <img src='{{ asset('assets/web/images/shop/single-products/product-6.jpg') }}'
                                            alt='' data-zoom-image="images/shop/single-products/product-6.jpg" />
                                    </div>

                                </div>

                                <!-- sag sol -->
                                <a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
                                    <i class="tf-ion-ios-arrow-left"></i>
                                </a>
                                <a class='right carousel-control' href='#carousel-custom' data-slide='next'>
                                    <i class="tf-ion-ios-arrow-right"></i>
                                </a>
                            </div>

                            <!-- thumb -->
                            <ol class='carousel-indicators mCustomScrollbar meartlab'>
                                <li data-target='#carousel-custom' data-slide-to='0' class='active'>
                                    <img src='{{ asset('assets/web/images/shop/single-products/product-1.jpg') }}'
                                        alt='' />
                                </li>
                                <li data-target='#carousel-custom' data-slide-to='1'>
                                    <img src="{{ asset('assets/web/images/shop/single-products/product-2.jpg') }}"
                                        alt='' />
                                </li>
                                <li data-target='#carousel-custom' data-slide-to='2'>
                                    <img src="{{ asset('assets/web/images/shop/single-products/product-3.jpg') }}"
                                        alt='' />
                                </li>
                                <li data-target='#carousel-custom' data-slide-to='3'>
                                    <img src="{{ asset('assets/web/images/shop/single-products/product-4.jpg') }}"
                                        alt='' />
                                </li>
                                <li data-target='#carousel-custom' data-slide-to='4'>
                                    <img src="{{ asset('assets/web/images/shop/single-products/product-5.jpg') }}"
                                        alt='' />
                                </li>
                                <li data-target='#carousel-custom' data-slide-to='5'>
                                    <img src="{{ asset('assets/web/images/shop/single-products/product-6.jpg') }}"
                                        alt='' />
                                </li>
                                <li data-target='#carousel-custom' data-slide-to='6'>
                                    <img src="{{ asset('assets/web/images/shop/single-products/product-7.jpg') }}"
                                        alt='' />
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="single-product-details">
                        <h2>{{ $product->name }}</h2>
                        <p class="product-price">$ {{ $product->price }}</p>
                        {{-- @dd($product->name) --}}
                        <p class="product-description mt-20">
                            {{ $product->description }}
                        </p>
                        <div class="product-category">
                            <span>Categories:</span>
                            <ul>
                                <li><a
                                        href="{{ route('products.details', $product->id) }}">{{ $product->category->name }}</a>
                                </li>
                            </ul>
                        </div>


  <form action="{{ route('cart.store', $product->id) }}" method="post">
      @csrf
      @foreach ($product->attributes as $attribute)
          <div class="product-size">
              <span>{{ $attribute->name }}:</span>
              <select class="form-control" name="{{ $attribute->name }}">
                  @foreach ($product->variants as $variant)
                      @if ($variant->attribute_id == $attribute->id)
                          <option name="">{{$variant->name}}</option>
                      @endif
                  @endforeach
              </select>
          </div>
      @endforeach
      <div class="product-quantity">
          <span>Quantity:</span>
          {{-- <input type="hidden" value="{{ auth()->user()->id }}" name="user_id"> --}}
          <div class="product-quantity-slider">
              <input id="product-quantity" type="number" value="1" min="1"
                  name="quantity">
          </div>
      </div>


                            <input type="submit" class="btn btn-main mt-20" value="Add To Cart">

                        </form>
                        {{-- @dd($product->id) --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="tabCommon mt-20">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#details" aria-expanded="true">Details</a>
                            </li>
                            <li class=""><a data-toggle="tab" href="#reviews" aria-expanded="false">Reviews
                                    (3)</a></li>
                        </ul>
                        <div class="tab-content patternbg">
                            <div id="details" class="tab-pane fade active in">
                                <h4>Product Description</h4>
                                <p>{{ $product->description }}</p>
                            </div>
                            <div id="reviews" class="tab-pane fade">
                                <div class="post-comments">
                                    <ul class="media-list comments-list m-bot-50 clearlist">
                                        <x-reviews />
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="products related-products section">
        <div class="container">
            <div class="row">
                <div class="title text-center">
                    <h2>Related Products</h2>
                </div>
            </div>
            <div class="row">
                {{-- <x-product column="3"/>
            <x-product column="3"/>
            <x-product column="3"/>
            <x-product column="3"/> --}}

            </div>
        </div>
    </section>



    <!-- Modal -->
    <div class="modal product-modal fade" id="product-modal">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="tf-ion-close"></i>
        </button>
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="modal-image">
                                <img class="img-responsive"
                                    src="{{ asset('assets/web/images/shop/products/modal-product.jpg') }}" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-short-details">
                                <h2 class="product-title">GM Pendant, Basalt Grey</h2>
                                <p class="product-price">$200</p>
                                <p class="product-short-description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem iusto nihil cum. Illo
                                    laborum numquam rem aut officia dicta cumque.
                                </p>
                                <a href="#!" class="btn btn-main">Add To Cart</a>
                                <a href="#!" class="btn btn-transparent">View Product Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
