@extends('layouts.app')

@section('content')
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Cart</h1>
					<ol class="breadcrumb">
						<li><a href="{{ route('home') }}">Home</a></li>
						<li class="active">cart</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>



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
                      <th class="">Item Price</th>
                      <th class="">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                   <x-cart/>
                   <x-cart name="AirSpace" price="200.00" remove="Remove" />
                   <x-cart name="Bingo" price="200.00" remove="Remove" />

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
