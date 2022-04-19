@extends('layouts.app')

@section('content')

    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                
            </div>
            
        </div>
    </div>
    <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
        <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
            Thank you: <?php echo $_GET['commentsName']; ?>
        </h1>
        
            <br>
            <p class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">email address: <?php echo $_GET['commentsEmail']; ?></h1>
            <br>
            <h2 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">your Message: <?php echo $_GET['commentsMessage']; ?></h2>
            <br>
            
            <h2 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">Was Successfully Sent</h2>
    </div>

<html>
<body>



</body>
</html>