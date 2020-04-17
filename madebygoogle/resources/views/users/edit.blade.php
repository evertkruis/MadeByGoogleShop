@extends('layouts.layout')

@section('content')
    <form method="post" action="/users/{{$user->id}}">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="productName" class="form-control" id="productName"
                   aria-describedby="productNameHelp" value="{{ $user->name }}">
        </div>

        <div class="form-group">
            <label for="productName">Email</label>
            <input type="email" name="email" class="form-control" id="email"
                   aria-describedby="emailHelp" value="{{ $user->email }}">
        </div>

        <div class="form-group">
            <label for="productName">Password</label>
            <input type="password" name="password" class="form-control" id="password"
                   aria-describedby="passwordHelp" value="{{ $user->password }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
