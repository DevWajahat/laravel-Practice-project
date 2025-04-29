@props([
    'name'=> 'Sunglass',
    'price' => '200.00',
    'remove' => 'Remove'
])

<tr class="">
    <td class="">
      <div class="product-info">
        <img width="80" src="{{ asset('assets/web/images/shop/cart/cart-1.jpg') }}" alt="" />
        <a href="#!">{{ $name }}</a>
      </div>
    </td>
    <td class="">${{ $price }}</td>
    <td class="">
      <a class="product-remove" href="#!">{{ $remove }}</a>
    </td>
  </tr>
