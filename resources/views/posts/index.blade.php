@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <h1>Posts</h1>

{{--    @dd($posts);--}}
    @foreach($posts as $post)
        <h2>{{ $post->title }}</h2>
        <a href="{{ route('posts.show', $post->id) }}">Show More</a>
    @endforeach
@endsection
