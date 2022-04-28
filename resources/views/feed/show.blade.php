@extends('layouts.app')

@section('content')
    <div class="block-wrapper">
        <div class="block-left">
            <div class="post-image">
                <img src="{{ asset('images/' . $post->image_path) }}" alt="">
            </div>
        </div>
        <div class="block-right">
            <span class="text-pri-color post-user-block">
                <a class="no-underline hover: underline" href="/user/{{ $post->user->id }}">{{ $post->user->name }}</a>
            </span>
            <span class="text-pri-color post-date-block">
                <a class="no-underline hover: underline">Postd on {{ date('jS M Y', strtotime($post->updated_at)) }}
            </span>
            <div >
                <h1 class="text-pri-color post-title-block">
                    {{ $post->title }}
                </h1>
            </div>
            <p class="text-pri-color font-light post-desc-block">
                {{ $post->description }}
            </p>
        </div>
    </div>
@endsection 