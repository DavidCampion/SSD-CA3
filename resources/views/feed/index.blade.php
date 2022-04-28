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
            <span class="text-gray-500">
                <a href="/user/{{ $post->user->id }}" class="font-bold italic text-pri-color">{{ $post->user->name }}</a>
            </span>

            
            <div class="post-image">
                <img src="{{ asset('images/' . $post->image_path) }}" alt="">
            </div>
            <button 
                type="submit" 
                class="likeButton text-gray-700 italic pb-1 border-b-2"
                ><img src="{{ asset('images/heart-solid.png') }}" />
                Like:    {{$post->Likes}}
            </button>
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
                

                {{-- <button
                type="submit"
                value="{{$post->Likes}}" 

                >
                Like
                </button> --}}

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