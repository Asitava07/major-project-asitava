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
    <link rel="stylesheet" href="css/style.css">
    <title>LearningBee🐝|Admin/Blog</title>
</head>

<body>
    <div class="admin_courses_1">
        <div class="admin_courses_1_head">
            <p style="font-size:4rem;font-weight:800;color:#ffffff;background-color:red;border:none;padding:5px 10px;border-radius:10px">Update Courses Category</p>

        </div>
    </div>


    <div class="updateblogs">
        <form action="{{url('blog/'.$bdata->id)}}" method="post">
            {{ csrf_field() }}
            @method('PUT')
            <h2 style=" color:darkred; font-size:2rem;">PUBLISH NEW BLOG</h2>
            <label>Title</label><input type="text" value=" {{$bdata->title}}" name="title"><br />
            <label>Blog</label><textarea name="description" rows="5" cols="10" value=" {{$bdata->description}}"></textarea><br />
            <label>Image</label><input style="height:3rem" type="file" name="image" id="" value=" {{$bdata->image}}">
            <button>Save</button>
        </form>
    </div>

</body>

</html>