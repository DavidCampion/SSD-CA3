@extends('layouts.app')

@section('content')

@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif
<div class="post-grid">
    @foreach ($posts as $post)
        @if ($loop->first)
            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">{{ $post->user->name }} Posts</h1>  
        @endif
    @endforeach
</div>
<div class="post-grid">
    @foreach ($posts as $post)
        <div class="post-block bg-post-gray">
            <span class="text-gray-500">
                <span class="font-bold italic text-pri-color">{{ $post->user->name }}</span>
            </span>
            <div class="post-image">
                <img src="{{ asset('images/' . $post->image_path) }}" alt="">
            </div>
            <div>
                <h2 class="text-pri-color font-bold text-5xl pb-4">
                    {{ $post->title }}
                </h2>
                <span class="text-sec-color">
                    {{ date('jS M Y', strtotime($post->updated_at)) }}
                </span>

                <p class="text-xl text-sec-color pt-8 pb-10 leading-8 font-light">
                    {{ $post->description }}
                </p>

                <a href="/feed/{{ $post->slug }}" class="link-button"></a>

                @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                    <span class="float-right">
                        <a 
                            href="/feed/{{ $post->slug }}/edit"
                            class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
                            Edit
                        </a>
                    </span>

                    <span class="float-right">
                        <form 
                            action="/feed/{{ $post->slug }}"
                            method="POST">
                            @csrf
                            @method('delete')

                            <button
                                class="text-red-500 pr-3"
                                type="submit">
                                Delete
                            </button>

                        </form>
                    </span>
                @endif
            </div>
        </div>    
    @endforeach
</div>

@endsection