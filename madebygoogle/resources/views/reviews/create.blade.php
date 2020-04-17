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

    @can('create reviews')
    <form method="post" action="/reviews">
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title"class="form-control" placeholder="Title">
        </div>

        <div class="form-group">
            <label >Product List<label>
            <select class="form-control" name="product_id">
                @foreach ($products as $product)
                    <option value="{{$product->id}}">{{$product->productName}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <input type="text" name="body" class="form-control" id="body"
                   aria-describedby="bodyHelp" placeholder="Body">
        </div>

        <div class="form-group">
            <label for="rating">Rating</label>
            <textarea class="form-control" name="rating" id="rating" rows="1" placeholder="Rating"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
 @else
    <div class="alert alert-danger">
        <p>You have no rights to make a review</p>
    </div>
    @endcan
@endsection
