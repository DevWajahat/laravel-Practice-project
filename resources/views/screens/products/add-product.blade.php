@extends('layouts.app')

@section('content')
    <div class="container mb-4 mt-4">
        <h2 class="fw-bold"> Add Product in Cart </h2>
        <form method="post" action="{{ route('store.products') }}" style="padding:50px 0;">
            @csrf
            <br>
            <div class="mt-3 mt-3">
                <label for="">Name </label>
                <input type="text" name="name" id="" class="form-control" placeholder="Name Of Product">
            </div>
            <br>
            <div class="mt-3">
                <label for="">Price</label>
                <input type="number" class="form-control" name="price" id="">
            </div>
            <br>
            <div class="mt-3">
                <label for="">Description</label>
                <input type="text" class="form-control" name="description" id="">
            </div>
            <br>
            <div class="mt-3">
                <label for="">Color</label>
                <input type="text" class="form-control" name="color" id="">
            </div>
            <br>
            <div class="mt-3">
                <label for="">Size</label>
                <select id="size" class="form-control" name="size">
                  <option value="S">S</option>
                  <option value="M">M</option>
                  <option value="L">L</option>
                  <option value="XL">XL</option>
                  </select>
            </div>
            <br>
            <div class="mt-3">
                <label for="">Quantity</label>
                <input type="number" class="form-control" name="quantity" id="quantity">
            </div>
            <br>

            <div class=" mt-5">
                <button class="btn btn-primary" type="submit">Add Product</button>
            </div>
        </form>
    </div>
@endsection
