@extends('layout.master')

@php
    $grandTotal = 0;
@endphp

@section('content')
<div id="receipt">
    <div class="content-container">
        <h3>Order Details</h3>
        <div class="alert alert-success payment-instructions">
            <h4 class="font-weight-bold">Payment Instructions</h4>
            <p>Please make payment to <span>BCA 2665263328 a/n PT. Cook & Eat</span>.</p>
            <p>Send the proof of payment to <span>contact@cookandeat.com</span> with <span>"[Order ID]/[Bank Account Holder Name]/[Payment Date]"</span> as the subject line.</p>
            <p>Order will only be processed once payment has been made.</p>
        </div>
        <div class="row">
            <div class="col receipt-table table-responsive-md">
                <table class="table table-striped table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>Ingredient</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($receipt->detailTransactions as $detail)
                        <tr>
                            <td><span>{{ $detail->ingredient->name}}</span>{{ ' @ Rp. '.$detail->ingredient->price.'/'.$detail->ingredient->unit }}</td>
                            <td>{{ $detail->quantity }}</td>
                            <td>{{ 'Rp. '.$detail->ingredient->price * $detail->quantity }}</td>
                        </tr>

                        @php
                            $grandTotal += $detail->ingredient->price * $detail->quantity;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col transaction-details text-left">
                <h6>Order ID</h6>
                <p>{{ $receipt->id }}</p>

                <h6>Customer Name</h6>
                <p>{{ $receipt->user->name }}</p>

                <h6>Customer Email</h6>
                <p>{{ $receipt->user->email }}</p>

                <h6>Customer Phone Number</h6>
                <p>{{ $receipt->user->phone }}</p>

                <h6>Customer Address</h6>
                <p>{{ $receipt->user->address }}</p>

                <h6>Grand Total</h6>
                <p>{{ 'Rp. '.$grandTotal }}</p>
            </div>
        </div>
    </div>
</div>
@endsection