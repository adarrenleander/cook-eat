@extends('layout.master')
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles-checkout.css') }}">
@section('content')
<div id="cart">
    <div class="content-container">
        <div class="cart">
            <h3>Shopping Cart</h3>
            @foreach ($recipes as $recipe)
            <div class="item-container">
                <div class="buttons">
                    <div class="delete-button">
                        <span class="delete-btn"></span>
                    </div> 
                </div>
                <div class="description">
                    <span>{{ $recipe->ingredient->name }}</span>
                    <span class="span-bottom">{{ $recipe->ingredient->unit }}</span>
                </div>
                <div class="quantity">
                    <button class="minus-button" type="button" name="button"></button>
                    <input type="text" name="qty" value="{{ $recipe->quantity }}">
                    <button class="plus-button" type="button" name="button"></button>
                </div>
                <div class="total">
                    <p>{{ 'Rp. '.$recipe->ingredient->price }}</p>
                </div>
            </div>
            @endforeach
            <a href="#"><button class="checkout">Checkout</button></a>
        </div>
    </div>
</div>
<script src="{{ asset('js/javascript.js') }}"></script>
@endsection