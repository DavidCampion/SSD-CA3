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
<div class="post-grid-page">
    @foreach ($posts as $post)
        <div class="post-block-page bg-post-gray">
            <div class="post-image-page">
                <img src="{{ asset('images/' . $post->image_path) }}" alt="">
            </div>
            <div class="editdelete-buttons">
                @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                    <span class="float-left">
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
            <div>
                <a href="/feed/{{ $post->slug }}" class="link-button"></a>
            </div>
        </div>    
    @endforeach
</div>

@endsection