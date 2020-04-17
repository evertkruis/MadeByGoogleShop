@extends('layouts.layout')

@section('content')


    <form method="post" action="/products/{{$product->id}}">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="productName">Product Name</label>
            <input type="text" name="productName" class="form-control" id="productName"
                   aria-describedby="productNameHelp" value="{{ $product->productName }}">
        </div>

        <div class="form-group">
            <label for="productName">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Description">{{ $product->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="productName">Price</label>
            <input type="text" name="price" class="form-control" id="price"
                   aria-describedby="priceHelp" value="{{ $product->price }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
