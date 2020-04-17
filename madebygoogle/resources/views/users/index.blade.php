@extends('layouts.layout')

@section('content')
    <h1 class="mt-5">Users</h1>

    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('users.edit', ['user' =>  $user->id ]) }}">Edit</a> &middot; <a class="btn btn-danger" href="{{ route('users.delete', ['user'=>  $user->id ]) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
@endsection
