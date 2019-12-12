@extends('layout.master')

@php
    $grandTotal = 0;
@endphp

@section('content')
<div id="checkout">
    <div class="content-container">
        <h3>Checkout</h3>
        <div class="row">
            <div class="col checkout-table">
                <div class="table-responsive-md">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>Ingredient</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carts as $cart)
                            <tr>
                                <td><span>{{ $cart->ingredient->name}}</span>{{ ' @ Rp. '.$cart->ingredient->price.'/'.$cart->ingredient->unit }}</td>
                                <td>{{ $cart->quantity }}</td>
                                <td>{{ 'Rp. '.$cart->ingredient->price * $cart->quantity }}</td>
                            </tr>

                            @php
                                $grandTotal += $cart->ingredient->price * $cart->quantity;
                            @endphp
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-right">
                        <h5>Grand Total: <span class="font-weight-bold ml-5">Rp. {{ $grandTotal }}</span></h5>
                    </div>
                </div>
            </div>
            <div class="col checkout-form">
                <h4 class="offset-md-1">Customer Details</h4>
                <form action="/checkout" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <input type="text" name="name" value="{{ old('name') }}" placeholder="Name" autocomplete="off">
                            @if ($errors->any())
                            <div class="text-danger text-left">
                                <p class="font-weight-bold">{{ $errors->first('name') }}</p>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <input type="text" name="email" value="{{ old('email') }}" placeholder="Email" autocomplete="off">
                            @if ($errors->any())
                            <div class="text-danger text-left">
                                <p class="font-weight-bold">{{ $errors->first('email') }}</p>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Phone Number" autocomplete="off">
                            @if ($errors->any())
                            <div class="text-danger text-left">
                                <p class="font-weight-bold">{{ $errors->first('phone') }}</p>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <textarea type="text" name="address" placeholder="Mailing Address" autocomplete="off">{{ old('address') }}</textarea>
                            @if ($errors->any())
                            <div class="text-danger text-left">
                                <p class="font-weight-bold">{{ $errors->first('address') }}</p>
                            </div>
                            @endif
                        </div>
                    </div>

                    <button action="submit">Confirm</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection