@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Have you any Questions for Us?
                </h1>
            </div>
        </div>
    </div>

    <div>
        <h1>Get in Contact with us </h1>

        <div id ="">
            <form id="contactUs" name="contactUs" method="post" action="confirmSent.blade.php" onsubmit = "">
                
                
                <fieldset>
                    
                <legend>Personal Data</legend>
                
                <label> Please enter your name:  </label>
                <input type="text" name ="username" placeholder="name..."/>
                
                <br/><br/>
                <label> Please enter your email: </label>
                <input type ="email" name="email" placeholder="youremail@.com...">
                
                <br/><br/>
                <label> Please enter your phone: </label>
                <input type ="number" name="phone" placeholder="(08x) XXX-XXXX" >
               
                <br/><br/>
                
                </fieldset>
                
                <br/>
            
                <fieldset>
                    
                <legend>Comments</legend>
                
                <textarea rows="4" cols="50" name="comment" form ="contactUs" >
                </textarea>
                
                </fieldset>
                <br/>
                
                
                <input type ="submit" name= "submit" />
                <input type="reset" name="reset" value = "Clear"/>
            </form>
        
@endsection