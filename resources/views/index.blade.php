@extends('layouts.app')

@section('content')
    <div class="main-page">
        <div class="background-image grid grid-cols-1 m-auto ovr-flw">
            <div class="flex text-gray-100 pt-10">
                <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                    <img src="{{ asset('images/logo.png') }}" alt="">
                    <a 
                        href="/feed"
                        class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                        View Feed
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection