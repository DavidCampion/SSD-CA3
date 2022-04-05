@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
            User Profile
        </h1>
    </div>
</div>

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

<div class="w-4/5 m-auto pt-20">
    <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">User Name: {{ Auth::user()->name }}</h1> 
    <h2 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">Email:{{Auth::user()->email}} </h1> 

    <h2 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">View Posts</h2>


   
        
        
    
</div>

@endsection