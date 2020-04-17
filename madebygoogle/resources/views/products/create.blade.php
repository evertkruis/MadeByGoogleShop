@extends('layouts.layout')

@section('content')

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="/products">
        @csrf
        <div class="form-group">
            <label for="productName">Product Name</label>
            <input type="text" name="productName" class="form-control" id="productName"
                   aria-describedby="productNameHelp" placeholder="Product Name">
        </div>

        <div class="form-group">
            <label for="productName">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Description"></textarea>
        </div>

        <div class="form-group">
            <label for="productName">Price</label>
            <input type="text" name="price" class="form-control" id="price"
                   aria-describedby="priceHelp" placeholder="Price">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
