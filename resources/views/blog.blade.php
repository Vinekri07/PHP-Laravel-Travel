@extends('welcome')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>
<body>
    @section('content')
        <div class="container-fluid blog_main"></div>
        <div class="blog_main_heading">
            <h1 style="text-align: center;">Explore!!</h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <img src="{{asset('images/thumb-01.jpg')}}" alt="">
                    <p>You should cherish the things which make you understand how small your problems are. Fill your life with experiences….</p>
                </div>
                <div class="col-sm-4">

                </div>
                <div class="col-sm-4">
                    
                </div>
            </div>
        </div>
    @endsection
        
</body>
</html>