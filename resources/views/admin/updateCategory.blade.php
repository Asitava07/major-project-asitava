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


    <div class="updateCategory">
        <form action="{{url('category/'.$data->id)}}" method="post">
            {{ csrf_field() }}
            @method('PUT')
            <h2 style="color:darkred;">Update CATEGORY</h2>
            <label>Category Id</label><input name='categoryid' type="text" value=" {{$data->categoryid}}"><br>
            <label>Category Name</label><input name='categoryiname' type="text" value="{{$data->categoryname}}"><br>
            <button type="submit">Update</button>
        </form>
    </div>

</body>

</html>