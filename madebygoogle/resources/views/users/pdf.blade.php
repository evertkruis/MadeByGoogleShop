@extends('layouts.layout')
@section('content')
    <h1>Shopping Cart</h1>
<div class="table-responsive-sm">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Item</th>
            <th>Description</th>

            <th class="right">Price</th>
            <th class="center">Quantity</th>
            <th class="right">Total</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="left strong">{{ $product->productName }}</td>
            <td class="left">{{ $product->description }}</td>
            <td class="right">${{ $product->price }}</td>
            <td class="center">1</td>
            <td class="right">${{ $product->price }}</td>
        </tr>
        </tbody>
    </table>

    <div>{{ $user->name }}</div>
    <div>{{ $user->email }}</div>
    <div>{{ $user->address }}</div>
    <div>{{ $user->zipcode }} {{$user->city }}</div>
    <div>{{ $user->country}}</div>
    <br>
    <br>
    <a class="btn btn-primary" href="{{ url('home') }}">Homepage</a>
</div>
    @endsection
