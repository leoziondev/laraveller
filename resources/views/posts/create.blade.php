@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="bg-white rounded shadow-sm px-8 pt-6 pb-8 mb-4">
        <h1 class="text-2xl text-gray-700 font-bold mb-8">Post create</h1>

        @if(session('message'))
            <div class="bg-green-200 rounded p-4 mb-8">
                <p class="text-green-700 text-sm font-semibold">{{ session('message') }}</p>
            </div>
        @endif

        <form action="{{ route('posts.store') }}" method="post">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-600 text-sm font-semibold mb-2" for="title">
                    Title
                </label>
                <input
                    class="bg-gray-100 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="title"
                    id="title"
                    type="text"
                    value="{{ old('title') }}"
                />
                @error('title')
                    <span class="text-red-500 text-sm italic">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label
                    class="block text-gray-600 text-sm font-semibold mb-2"
                    for="username"
                >
                    Body
                </label>
                <textarea
                    rows="4"
                    class="bg-gray-100 p-1 appearance-none border rounded w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="body"
                    id="body"
                />
                {{ old('body') }}
                </textarea>
                @error('body')
                    <span class="text-red-500 text-sm italic">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <button class="bg-indigo-500 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition" type="submit">
                    Create post
                </button>
            </div>
        </form>
    </div>
@endsection
