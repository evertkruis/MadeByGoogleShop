@extends('layouts.layout')

@section('content')
    <h1 class="mt-5">Reviews</h1>

    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('reviews.index') }}">Index</a>
            </li>
            <li>
            <li class="nav-item">
                @can('create reviews')
                <a class="nav-link" href="{{ route('reviews.create') }}">Create</a>
                @endcan
            </li>
        </ul>
    </nav>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Rating</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($reviews as $review)
            <tr>
                <td>{{ $review->id }}</td>
                <td>{{ $review->title }}</td>
                <td>{{ $review->username }}</td>
                <td>{{ $review->rating }}</td>
                <td scope="row">
                    <a class="btn btn-primary" href="{{ route('reviews.show', ['review' => $review->id]) }}">Show</a>
                    @can('edit reviews')
                    &middot; <a class="btn btn-warning" href="{{ route('reviews.edit', ['review' => $review->id]) }}">Edit</a> &middot;
                    @endcan
                    @can('delete reviews')
                    <a class="btn btn-danger" href="{{ route('reviews.delete', ['review' => $review->id]) }}">Delete</a>
                    @endcan
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
