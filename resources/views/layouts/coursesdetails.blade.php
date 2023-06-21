@extends('layouts.navbar')
@section('content')
@stop

@extends('layouts.footer')
@section('footer')
@stop


<!-- Session::get('user') -->
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
        <img src={{ '../uploads/courses/'.$showData->image }} alt="" />
    </div>
    <div class="coursedetails_2">
        <div class="coursedetails_2_left">
            <div class="coursedetails_2_left_category">
                <button style="font-weight:800;color:white;">Category : {{$showData->categoryid}}</button>
            </div>
            <div class="coursedetails_2_left_main">
                <div class="coursedetails_2_left_main_rating">
                    <div class="coursedetails_2_left_main_star">
                        <p>RATING out of 5</p>
                        <div id="stars">
                            <i class="fa-solid fa-star" style="color:gold"></i>
                            <i class="fa-solid fa-star" style="color:gold"></i>
                            <i class="fa-solid fa-star" style="color:gold"></i>
                            <i class="fa-solid fa-star" style="color:gold"></i>
                            <i class="fa-solid fa-star" style="color:darkgray"></i>
                        </div>
                        <p>TOP RATING</p>
                    </div>
                    <!-- {/* <div class="coursedetails_2_left_main_bar">

				</div> */} -->
                </div>
                @foreach($review as $r)
                <div class="coursedetails_2_left_main_reviews">
                    <div class="coursedetails_2_left_main_review">
                        <div class="coursedetails_2_left_main_reviews_top">
                            <div class="coursedetails_2_left_main_reviews_top_user">
                                <div id="dp">
                                    <img src="{{$r->image}}" alt="" />
                                </div>
                                <div id="name">
                                    {{$r->name}}
                                </div>
                            </div>
                            <div class="coursedetails_2_left_main_reviews_top_time">
                                <i class="fa-solid fa-clock"></i>
                                <p>{{$r->created_at->format('d.m.Y')}}</p>
                            </div>
                        </div>
                        <div class="coursedetails_2_left_main_reviews_bottom">
                            <p>{{$r->review}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="coursedetails_2_right">
            <div class="coursedetails_2_right_main">
                <div class="coursedetails_2_right_main_image">
                    <img src={{ '../uploads/courses/'.$showData->image }} alt="" />
                </div>
                <div class="coursedetails_2_right_main_price">
                    <p>💲0</p>
                </div>
                <div class="coursedetails_2_right_main_buy">
                    <form action="{{url('usercourse/'.$showData->id)}}" method="post">
                        {{ csrf_field() }}
                        @if(Session::get('user'))
                        <input type="submit" name="enroll" id="enroll" value="Enroll Now" />
                        @else
                        <button name="enroll" type="reset" onclick="loginAlert()" id="enroll">Enroll Now</button>
                        @endif
                    </form>
                    <!-- <button class='coursedetails_2_right_main_button'>Enroll Now</button> -->
                </div>
                <h1>{{$showData->title}}</h1>
                <span id='hori_line'></span>
                <div class="coursedetails_2_right_main_about">
                    <h1>About The Course</h1>
                    <p>{{$showData->description}}</p>
                </div>
                <span id='hori_line'></span>
                <div class="coursedetails_2_right_main_share">
                    <h1>Share This Course</h1>
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
    <script>
        function loginAlert() {
            alert("PLEASE LOGIN");
        }
    </script>
</body>

</html>