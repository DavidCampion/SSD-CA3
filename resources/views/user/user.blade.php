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
            <h1 class="sm:text-white mar-lef-rig text-5xl font-bold text-shadow-md pb-14">{{ $post->user->name }}</h1>  
        @endif
    @endforeach
</div>
<div class="posts-button">
    <ul>
        <li id="button-styling-1"><a>Posts</a></li> 
    </ul>
</div>
<div class="post-grid-page">
    @foreach ($posts as $post)
        <div class="post-block-page bg-post-gray">
            <div class="post-image-page">
                <img src="{{ asset('images/' . $post->image_path) }}" alt="">
            </div>
            <div>
                @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                    <div class="editdelete-buttons">
                        <span class="float-left">
                            <a 
                                href="/feed/{{ $post->slug }}/edit"
                                class="text-gray-700 italic hover:text-gray-900 font-bold border-b-2">
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
                                    class="text-red-500 font-bold"
                                    type="submit">
                                    Delete
                                </button>

                            </form>
                        </span>
                    </div>
                @endif
            </div>
            <div>
                <a href="/feed/{{ $post->slug }}" class="link-button"></a>
            </div>
        </div>    
    @endforeach
</div>

@endsection