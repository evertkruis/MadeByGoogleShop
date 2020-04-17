@extends('layouts.layout')

@section('content')
    <form method="post" action="/reviews/{{$review->id}}">
        @method('DELETE')
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title"
                   aria-describedby="titleHelp" value="{{ $review->title }}" disabled>
        </div>

        <div class="form-group">
            <label for="username">Username</label>
            <input type="email" name="text" class="form-control" id="username"
                   aria-describedby="usernameHelp" value="{{ $review->username }}" disabled>
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <input type="email" name="text" class="form-control" id="body"
                   aria-describedby="bodyHelp" value="{{ $review->body }}" disabled>
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <input type="email" name="text" class="form-control" id="body"
                   aria-describedby="bodyHelp" value="{{ $review->body }}" disabled>
        </div>


        <div class="form-group">
            <label for="rating">Rating</label>
            <input type="text" name="rating" class="form-control" id="rating"
                   aria-describedby="ratingHelp" value="{{ $review->rating }}" disabled>
        </div>


        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection
