@extends('layout.master')

@section('content')
<div id="cart">
    <div class="content-container">
        <div class="cart">
            <h3>Shopping Cart</h3>
            @foreach ($carts as $cart)
            <div class="item-container">
                <div class="delete">
                    <a href="/cart/remove/{{ $cart->ingredient_id }}">x</a>
                </div>
                <div class="description">
                    <span>{{ $cart->ingredient->name }}</span>
                    <span class="span-bottom">{{ $cart->ingredient->unit.' @ Rp. '.$cart->ingredient->price }}</span>
                </div>
                <div class="quantity">
                    <a href="/cart/reduce/{{ $cart->ingredient_id }}">-</a>
                    <input type="text" name="qty" value="{{ $cart->quantity }}" readonly>
                    <a href="/cart/add/{{ $cart->ingredient_id }}">+</a>
                </div>
                <div class="total">
                    <p>{{ 'Rp. '.$cart->ingredient->price * $cart->quantity }}</p>
                </div>
            </div>
            @endforeach
            @if ($carts->isNotEmpty())
            <a href="/checkout"><button class="btn-checkout">Checkout</button></a>
            @else
            <button class="btn-disabled" disabled>Checkout</button>
            @endif
        </div>
    </div>
</div>
@endsection