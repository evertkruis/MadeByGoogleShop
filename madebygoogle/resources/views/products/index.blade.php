@extends('layouts.layout')

@section('content')
    <h1 class="mt-5">Products</h1>

    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('products.index') }}">Index</a>
            </li>
            <li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('products.create') }}">Create</a>
            </li>
        </ul>
    </nav>

    <table class="table">
        <thead class="thead-dark">
                <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Actions</th>
                </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->productName }}</td>
                <td>{{ $product->description }}</td>
                <td>&euro;{{ $product->price }}</td>
                <td scope="row">
                    <a class="btn btn-primary" href="{{ route('products.show', ['product' => $product->id]) }}">Show</a> &middot;
                    <a class="btn btn-warning" href="{{ route('products.edit', ['product' => $product->id]) }}">Edit</a> &middot;
                    <a class="btn btn-danger" href="{{ route('products.delete', ['product' => $product->id]) }}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
