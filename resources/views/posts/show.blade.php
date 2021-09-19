@extends('layouts.app')

@section('title', 'Post')

@section('content')
    <h1>Post: {{ $post->id }} - {{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
@endsection
