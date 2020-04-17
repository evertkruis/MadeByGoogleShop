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

    <form method="post" action="/categories">
        @csrf
        <div class="form-group">
            <label for="categoryName">Category Name</label>
            <input type="text" name="categoryName" class="form-control" id="categoryName"
                   aria-describedby="categoryNameHelp" placeholder="Category Name">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
