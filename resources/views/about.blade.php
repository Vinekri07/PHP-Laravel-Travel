@extends('welcome')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>    
</head>
<body>
    @section('content')
        <div class="container-fluid about_main">
            <div class="row">
                <div class="col-sm-6">
                    <br><br>
                   <div class="about_heading"> <h3 style="text-align: center">Hey!! I am Nupur.</h3>
                    <br>
                    <p>I am assuming you turn out to be here because; like me, you are also searching for these moments. Travel is my passion. I love doing Adventures. I visit different places in every month or two. </p></div>
                </div>
                <div class="col-sm-6 about_img">
                    <img src="{{asset('images/thumb-07.jpg')}}" width="70%" alt="">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row about_carousel">
                <div class="col-sm-6">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="{{asset('images/thumb-09.jpg')}}" class="d-block w-100">
                          </div>
                          <div class="carousel-item">
                            <img src="{{asset('images/thumb-10.jpg')}}" class="d-block w-100">
                          </div>
                          <div class="carousel-item">
                            <img src="{{asset('images/thumb-11.jpg')}}" class="d-block w-100">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="carouselExampleIndicators" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="carouselExampleIndicators" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
           
                <div class="col-sm-6 about_content">
                    <p>I’ve always loved travel. For me travel is not just being on a holiday, it is about wandering out into the unexplored places and coming out of your comfort zone. It means trying new food and experiencing new culture. I have been travelling since I was a child. Every year in month of June or July I travel with my family. We travel to different destinations every year and now it is kind of a tradition.
                    </p><p>
                        I have always been that girl who drives crazy. I love doing crazy stuffs.
                        </p><p>With THIS BLOG I hope to encourage you guys to travel more and to travel independently; by sharing my own stories and honest advice. 
                        </p>
                </div>
            </div>
        </div>

    @endsection
</body>
</html>