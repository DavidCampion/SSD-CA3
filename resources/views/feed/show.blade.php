@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-500">
        <a class="no-underline hover: underline" href="/user/{{ $post->user->id }}">{{ $post->user->name }}</a>, Postd on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>
    <div class="post-image">
        <img src="{{ asset('images/' . $post->image_path) }}" alt="">
    </div>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->description }}
    </p>
</div>

@endsection 