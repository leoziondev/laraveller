@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <h1>Posts</h1>

{{--    @dd($users);--}}
    @foreach($users as $user)
        <p>{{ $user->name }}</p>
    @endforeach
@endsection
