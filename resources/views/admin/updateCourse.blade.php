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
    <title>LearningBee🐝|Admin/Courses</title>
</head>

<body>
    <div class="admin_courses_1">
        <div class="admin_courses_1_head">
            <p style="font-size:4rem;font-weight:800;color:#ffffff;background-color:red;border:none;padding:5px 10px;border-radius:10px">Update Courses Category</p>

        </div>
    </div>


    <div class="updateCourse">
        <form action="{{url('adminCourse/'.$cdata->id)}}" method="post">
            {{ csrf_field() }}
            @method('PUT')
            <h2 style="color:darkred;">UPDATE NEW COURSE</h2>
            <label>Title</label><input name='title' type="text" value="{{$cdata->title}}"><br />
            <span class="text-danger">@error('title') {{"$message"}} @enderror</span>
            <label>Description</label><textarea name='description' type="text" rows="10" cols="43" value="{{$cdata->description}}"></textarea><br>
            <span class="text-danger">@error('description') {{"$message"}} @enderror</span>
            <label>Price</label><input type='text' name='price' class='coursemodal_1_input_1' value="{{$cdata->price}}"><br />
            <span class="text-danger">@error('price') {{"$message"}} @enderror</span>
            <label>Image</label><input style="height:3rem" type="file" name="image" id="" value="{{$cdata->image}}"><br>
            <span class="text-danger">@error('image') {{"$message"}} @enderror</span>
            <label>Duration</label><input type="text" name='duration' class='coursemodal_2_input_1' value="{{$cdata->duraion}}"><br />
            <span class="text-danger">@error('duration') {{"$message"}} @enderror</span>

            <button>Save</button>
        </form>
    </div>

</body>

</html>