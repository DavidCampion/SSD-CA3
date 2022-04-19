@extends('layouts.app')

@section('content')

<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            
        </div>
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
    <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
        Have you any Questions for Us?
    </h1>
    <form
        class="form" 
        action="/confirmSent"
        method="POST"
        enctype="multipart/form-data">
        @method('GET')
        @csrf
      
        
            <fieldset>
                <legend>Your Details</legend>
        <input 
            type="text"
            name="commentsName"
            placeholder="Please enter name"
            class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">

        <input 
            type="email"
            name="commentsEmail"
            placeholder="Please enter email"
            class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">  
        
        <input 
            type="number"
            name="commentsPhone"
            placeholder="Please enter phone"
            class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">      
            </fieldset>
            <br/>
            <fieldset>
            <legend>Your Comment</legend>
        <textarea 
            rows="4" cols="50"
            name="commentsMessage"
            placeholder="Feedback...."
            class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none">
        </textarea>
            </fieldset>
        <button    
            type="submit"
            class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            Submit 
        </button>

        <button    
            type="reset"
            class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            reset
        </button>




    </form>
</div>

@endsection