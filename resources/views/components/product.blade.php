@props([
    'id' ,
    'name',
    'price',
    'column' => '4'
])


<div class="col-md-{{ $column }}">
    <div class="product-item">
        <div class="product-thumb">
            <span class="bage">Sale</span>
            <img class="img-responsive" src="{{ asset('assets/web/images/shop/products/product-1.jpg') }}" alt="product-img" />
            <div class="preview-meta">
                <ul>
                    <li>
                        <span  data-toggle="modal" data-target="#product-modal">
                            <i class="tf-ion-ios-search-strong"></i>
                        </span>
                    </li>
                    <li>
                        <a href="#!" ><i class="tf-ion-ios-heart"></i></a>
                    </li>
                    <li>
                        <a href="#!"><i class="tf-ion-android-cart"></i></a>
                    </li>
                </ul>
              </div>
        </div>
        <div class="product-content">
            <h4><a href="{{ route('products.details',$id) }}">{{ $name }}</a></h4>
            <p class="price">${{ $price }}</p>
        </div>
    </div>
</div>
