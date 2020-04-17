@extends('layouts.layout')

@section('content')

    <form method="post" action="/products/{{$user->id}}">
        @method('DELETE')
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name"
                   aria-describedby="nameHelp" disabled="disabled" value="{{ $user->name }}">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email"
                   aria-describedby="emailHelp" disabled="disabled" value="{{ $user->email }}">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password"
                   aria-describedby="passwordHelp" value="{{ $user->password }}" disabled="disabled">
        </div>

        <button type="submit" class="btn btn-primary">Delete</button>
    </form>
@endsection
