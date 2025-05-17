@props([
    'name',
    'color',
    'size',
    'id'
])


<tr class="">
    <td class="">
        <div class="product-info">
            <img width="80" src="{{ asset('assets/web/images/shop/cart/cart-1.jpg') }}" alt="" />
            <a href="#!">{{ $name }}</a>
        </div>
    </td>
    <td class="">{{ $color }}</td>
    <td class="">{{ $size }}</td>
    <td class="">
        <a class="product-remove" href="{{ route('cart.destroy',$id) }}"> remove </a>
    </td>
</tr>
