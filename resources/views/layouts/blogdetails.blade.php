@extends('layouts.navbar')
@section('content')
@stop

@extends('layouts.footer')
@section('footer')
@stop

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="images/bee4.png">
    <title>LearningBee🐝|CourseDetails</title>
</head>

<body>
    <div class="coursedetails_1">
        <img src={{ '../uploads/blogs/'.$blog->image }} alt="" />
    </div>
    <div class="coursedetails_2">
        <div class="coursedetails_2_left">
            <div class="coursedetails_2_left_category">
                <button>Blogs</button>
            </div>
            <div class="blogdetails_2_left_main">
                <p style="margin:50px; font-size:2rem;">{{!! $blog->description !!}}</p>
            </div>
        </div>
        <div class="blogdetails_2_right">
            <div class="coursedetails_2_right_main">
                <div class="coursedetails_2_right_main_image">
                    <img src={{ '../uploads/blogs/'.$blog->image }} alt="" />
                </div>
                <div class="coursedetails_2_right_main_price">
                </div>
                <div class="coursedetails_2_right_main_buy">
                    <a href="/payment"><button class='coursedetails_2_right_main_button'>Published at : </button></a>
                </div>
                <h1></h1>
                <span id='hori_line'></span>
                <div class="coursedetails_2_right_main_about">
                    <h1>{{$blog->title}}</h1>
                    <p></p>
                </div>
                <span id='hori_line'></span>
                <div class="coursedetails_2_right_main_share">
                    <h1>Share This Blog</h1>
                    <div id="icon">
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-youtube"></i>
                        <i class="fa-brands fa-discord"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-telegram"></i>
                        <i class="fa-brands fa-square-whatsapp"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>