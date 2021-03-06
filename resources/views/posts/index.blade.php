@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <h1 class="text-2xl text-gray-700 font-bold mb-8">Posts</h1>

    @if(session('message'))
        <div class="bg-green-200 rounded p-4 mb-8">
            <p class="text-green-700 text-sm font-semibold">{{ session('message') }}</p>
        </div>
    @endif

    <div class="grid grid-cols-3 gap-4">
    @foreach($posts as $post)
        <div class="bg-white rounded p-4">
            <h2 class="text-xl text-gray-700 font-bold">{{ $post->title }}</h2>
            <a class="text-sm text-gray-500 hover:text-indigo-700 transition" href="{{ route('posts.show', $post->slug) }}">Show More</a>
        </div>
    @endforeach
    </div>
@endsection
