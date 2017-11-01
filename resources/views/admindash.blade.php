@extends('layout.admin')

@section('title')

    Admin : Dashboard

@endsection

@section('body')

    <br>
    <div class="w3-row">
        <div class="w3-third w3-container">

            <a href="{{ route('orders') }}" class="w3-btn w3-block w3-jumbo w3-ripple w3-brown w3-hover-blue">View Orders</a>
        </div>
        <div class="w3-third w3-container">
            <a href="{{ route('account') }}" class="w3-btn w3-block w3-jumbo w3-ripple w3-brown w3-hover-red">Accounts</a>
        </div>
        <div class="w3-third w3-container">
        <a href="{{ route('paymentdata') }}" class="w3-btn w3-block w3-jumbo w3-ripple w3-brown w3-hover-red">Payments</a>
        </div>
    </div>

@endsection