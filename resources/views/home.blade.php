@extends('welcome')


@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
    <div class="home_main">
        <div>
            <h1 class="home_main_content">Explore the world with me.</h1>
        </div>
    </div>

    <div class="home_main_2">
        <p>"Travelling - It leaves you speachless, then turns you into a storyteller." - Ibn Battuta</p>
    </div>

    <div class="container">
        <div class="row">
            <h1 style="text-align:center">INSIGHTS!!</h1>
        </div>
        <div class="row">
            <div class="col-sm-3 home_main_img">
                
            </div>
            <div class="col-sm-6 home_main_content_2">
                <p>Mask covered faces, new stuff to add on in our backpack; masks and sanitizers. 
                    The spread of corona virus has unexpectedly dragged all ordinary life and travel life to a pause. 
                    I was scheduled to travel Sikkim in mid-may all of these got canceled. 
                    This is a snapshot of that day when I last traversed from Delhi to Ahmedabad.</p>
                    <p>I started marveling what to do now. And I began by watching many travel-related movies. I did a virtual tour of all my holidays and I end up writing about my journet, my adventures, and I have lots of untold travel stories from my journey over the years, and what’s better place than this to share my adventures.
                    </p>
                    <p>Here I am EXPLORING THE WHOLE NEW WORLD and hoping that this pandemic ends soon so that I can wander and bring you all along with me. 
                   </p><p>This is my story of how I jumped onto blogging.
                    </p>
                    <p>-Love Nupur</p>
            </div>
            <div class="col-sm-3 home_main_img">

            </div>
        </div>
    </div>

    <div class="container-fluid home_content">
        <h1 class="home_main_heading">MY DEVOTION TO MOUNTAIN AND TEA!!!</h1>  
        <div class="row" style="padding-top: 40px;">
            <div class="col-sm-6">
                <div style="padding-top: 10%;padding-left:100px;width:600px" ><p>I am a big Tea lover and Tea with a view is like added bonus for me. 
                    Where ever you go in the mountains the thing which thrills you is Tea. 
                    The best combination always, Tea and chilled weather, and how complete it could get if you are in the mounts. 
                    Cool breeze!! Adventure in your soul!! and sipping a hot cup of tea.</p></div>
            </div>
           <div class="col-sm-6">
               <div class="row">
                   <div class="col-sm-6">
                        <div class="home_img"><img src="{{asset('images/thumb-04.jpg')}}" width="250px" alt=""></div>
                   </div>
                   <div class="col-sm-6">
                        <div class="home_img"><img src="{{asset('images/thumb-05.jpg')}}" width="250px" alt=""></div>
                   </div>
               </div>
           </div>
        </div>
    </div>


</body>
</html>
@endsection