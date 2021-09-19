@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="bg-white rounded shadow-sm px-8 pt-6 pb-8 mb-4">
        <div class="flex items-center justify-between  mb-8">
            <h1 class="text-2xl text-gray-700 font-bold">Post edit</h1>

            <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="bg-red-500 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition" type="submit">
                    Delete post
                </button>
            </form>
        </div>

        @if(session('message'))
            <div class="bg-green-200 rounded p-4 mb-8">
                <p class="text-green-700 text-sm font-semibold">{{ session('message') }}</p>
            </div>
        @endif

        <form action="{{ route('posts.update', $post->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-gray-600 text-sm font-semibold mb-2" for="title">
                    Title
                </label>
                <input
                    class="bg-gray-100 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="title"
                    id="title"
                    type="text"
                    value="{{ $post->title }}"
                />
                @error('title')
                    <span class="text-red-500 text-sm italic">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label
                    class="block text-gray-600 text-sm font-semibold mb-2"
                    for="body"
                >
                    Body
                </label>
                <textarea
                    id="body"
                    name="body"
                    rows="3"
                    class="bg-gray-100 appearance-none py-2 px-3 mt-1 block w-full sm:text-sm border rounded text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    {{ $post->body }}
                </textarea>
                @error('body')
                    <span class="text-red-500 text-sm italic">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <button class="bg-indigo-500 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition" type="submit">
                    Update post
                </button>
            </div>
        </form>


    </div>
@endsection
