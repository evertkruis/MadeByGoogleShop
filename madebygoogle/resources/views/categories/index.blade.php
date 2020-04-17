@extends('layouts.layout')

@section('content')
    <h1 class="mt-5">Categories</h1>

    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('categories.index') }}">Index</a>
            </li>
            <li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('categories.create') }}">Create</a>
            </li>
        </ul>
    </nav>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Category Name</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($category as $category)
            <tr>
                <td>{{ $category->categoryName }}</td>
                <td scope="row">
                    <a class="btn btn-primary" href="{{ route('categories.show', ['category' => $category->id]) }}">Show</a> &middot;
                    <a class="btn btn-warning" href="{{ route('categories.edit', ['category' => $category->id]) }}">Edit</a> &middot;
                    <a class="btn btn-danger" href="{{ route('categories.delete', ['category' => $category->id]) }}">Delete</a>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
