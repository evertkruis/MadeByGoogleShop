@extends('layouts.layout')

@section('content')

    <form method="post" action="/categories/{{$category->id}}">
        @method('DELETE')
        @csrf
        <div class="form-group">
            <label for="categoryName">Category Name</label>
            <input type="text" name="categoryName" class="form-control" id="categoryName"
                   aria-describedby="categoryNameHelp" disabled="disabled" value="{{ $category->categoryName }}">
        </div>

        <button type="submit" class="btn btn-primary">Delete</button>
    </form>
@endsection
