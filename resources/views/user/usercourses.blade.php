@extends('layouts.navbar')
@section('content')
@stop

@extends('user.userdashboard')
@section('user')
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
    <title>LearningBee🐝|User/Courses</title>
</head>

<body>
    <div class="user_courses_1">
        <div class="user_courses_1_head">
            <p style="font-size:4rem;font-weight:800;color:#ffffff;background-color:red;border:none;padding:5px 10px;border-radius:10px">Courses</p>
        </div>
        <!-- <div class="courses_1_search">
            <input type="text" placeholder='Search Course' /><button>Search</button>
        </div> -->
    </div>
    <div class="user_courses_2">
        @forelse($displayUserCourses as $dis)
        <div class="user_courses_2_main">
            <div class="user_courses_2_main_image">
                <img src={{ '../uploads/courses/'.$dis->image }} alt="" />
            </div>
            <div class="user_courses_2_main_info">
                <p>{{$dis->title}}</p>
                <ProgressBar completed={20} class="user_courses_progress_wrapper" barContainerclass="user_courses_progress_container" labelclass="user_courses_progress_label" />
            </div>
            <div class="user_courses_2_main_option">
                <a href="{{url('video/'.$dis->id)}}"><button>Start</button></a>
            </div>
        </div>
        @empty
        <div >
                <p class="fs-1">No course found</p>
        </div>
        @endforelse
    </div>
    </div>
</body>

</html>