@extends('layouts.layout')

@section('content')
    <h1 class="mt-5">Reviews</h1>

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('reviews.index') }}">Index</a>
            </li>
            <li>
                <a class="nav-link" href="{{ route('reviews.create') }}">Create</a>
            </li>
            <li>
                <a class="nav-link active" href="{{  route('reviews.show', ['review' => $review->id]) }}">Review Details</a>
            </li>
        </ul>
    </nav>

    <div class="card">
        <div class="card-header">
            Review Details
        </div>
        <div class="card-body">
            <h2 class="card-title"> {{ $review->title }}</h2>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text"  name="username" class="form-control" id="username"
                       aria-describedby="usernameHelp" value="{{ Auth::user()->name }}" disabled>
            </div>

            <p class="cart"> {{ $review->body }}</p>
            <p class="card-text"> {{ $review->rating }}</p>
        </div>
    </div>

@endsection
