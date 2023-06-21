@extends('layouts.navbar')
@section('content')
@stop

@extends('admin.admindashboard')
@section('admin')
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
    <title>LearningBee🐝|Admin/StudentList</title>
</head>

<body>
    <div class="admin_student_1">
        <div class="admin_student_1_head">
            <p style="font-size:4rem;font-weight:800;color:#ffffff;background-color:red;border:none;padding:5px 10px;border-radius:10px">Students</p>
        </div>
        <div class="courses_1_search">
            <input type="text" placeholder='Search Course' /><button>Search</button>
        </div>
    </div>
    <div class="admin_student_2">
        @foreach($user as $u)
        <div class="admin_student_2_main">
            <div class="admin_student_2_main_image">
                @if($u->pic)
                <img src={{'../uploads/userpic/'.$u->pic}} alt="userpic.png">
                @else
                <img src="images/dummy.png" alt="userpic.png">
                @endif
            </div>
            <div class="admin_student_2_main_info">
                <p>Name: {{$u->firstname}} {{$u->lastname}}</p>
                <p>Email: {{$u->email}}</p>
                <p>Phone Number: {{$u->phoneno}}</p>
                <!-- <div class="admin_student_2_main_info_courses">
                    <p>Courses Applied For:</p>
                    <div class="admin_student_2_main_info_courses_option">
                        <button>AWS</button>
                        <button>AWS</button>
                        <button>AWS</button>
                        <button>AWS</button>
                    </div>
                </div> -->
            </div>
        </div>
        @endforeach
    </div>
</body>

</html>