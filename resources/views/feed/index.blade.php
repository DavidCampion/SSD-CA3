@extends('layouts.app')

@section('content')

@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif

@if (Auth::check())
    <div class="pt-15 w-4/5 m-auto">
        <a 
            href="/feed/create"
            class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
            Create post
        </a>
    </div>
@endif
<div class="post-grid">
    @foreach ($posts as $post)
        <div class="post-block bg-post-gray">
            <span class="text-gray-500 post-user">
                <a href="/user/{{ $post->user->id }}" class="font-bold italic text-pri-color">{{ $post->user->name }}</a>
            </span>
            
            <div class="post-image">
                <img src="{{ asset('images/' . $post->image_path) }}" alt="">
            </div>
            <div class="button-like">
                <button 
                    type="submit" 
                    class="likeButton text-gray-700 pb-1">
                    <img src="{{ asset('images/heart-solid.png') }}" alt="">
                    {{$post->Likes}}
                </button>
            </div>  
            <div>
                <h2 class="text-pri-color font-bold font-size-20 post-text">
                    {{ $post->title }}
                </h2>
                <p class="text-xl text-sec-color leading-8 font-light post-text">
                    {{ $post->description }}
                </p>
                <span class="text-sec-color post-date">
                    {{ date('jS M Y', strtotime($post->updated_at)) }}
                </span>

                <a href="/feed/{{ $post->slug }}" class="link-button"></a>
            </div>
        </div>    
    @endforeach
</div>

@endsection