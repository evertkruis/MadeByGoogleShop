@extends('layouts.layout')

@section('content')

    <form method="post" action="/categories/{{$category->id}}">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="categoryName">Category Name</label>
            <input type="text" name="categoryName" class="form-control" id="categoryName"
                   aria-describedby="categoryNameHelp" value="{{ $category->categoryName }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
