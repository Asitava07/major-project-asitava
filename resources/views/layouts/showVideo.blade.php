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
    <div class="course_video">
        <div class="course_video_main">
            <iframe width="100%" height="100%" src="{{$video->video}}" title="YouTube video player" frameborder="4" allow="accelerometer; clipboard-wri9te; encrypted-media; gyroscope; web-share" allowfullscreen></iframe>
        </div>
        <div class="course_video_info">
            <div class="course_video_info_image">
                <img src="{{ '../uploads/courses/'.$video->image }}" alt="" />
            </div>
            <div class="course_video_info_title">
                <p>{{$video->title}}</p>
            </div>
            <div class="course_video_info_description">
                <p>{{$video->description}}</p>
            </div>
        </div>
    </div>
</body>

</html>