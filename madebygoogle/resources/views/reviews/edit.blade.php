@extends('layouts.layout')

@section('content')
    <form method="post" action="{{ route('reviews.update', $review) }}">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title"
                   aria-describedby="titleHelp" value="{{ $review->title }}">
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <input type="email" name="text" class="form-control" id="body"
                   aria-describedby="bodyHelp" value="{{ $review->body }}">
        </div>

        <div class="form-group">
            <label for="rating">Rating</label>
            <input type="text" name="rating" class="form-control" id="rating"
                   aria-describedby="ratingHelp" value="{{ $review->rating }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
