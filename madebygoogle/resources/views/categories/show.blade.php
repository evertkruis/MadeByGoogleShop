@extends('layouts/layout')

@section('content')
    <h1 class="mt-5">Categories</h1>

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('categories.index') }}">Index</a>
            </li>
            <li>
                <a class="nav-link" href="{{ route('categories.create') }}">Create</a>
            </li>
            <li>
                <a class="nav-link active" href="{{ route('categories.show', ['category' => $category->id]) }}">Category Details</a>
            </li>
        </ul>
    </nav>

    <div class="card">
        <div class="card-header">
            Category Details
        </div>
        <div class="card-body">
            <h2 class="card-title"> {{ $category->categoryName }}</h2>
    </div>
    </div>

@endsection
