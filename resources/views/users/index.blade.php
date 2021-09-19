@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <h1>Users</h1>

    <ul>
        @foreach($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
@endsection
