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
            <p style="font-size:4rem;font-weight:800;color:#ffffff;background-color:red;border:none;padding:5px 10px;border-radius:10px">Courses</p>
            <button onclick="openPopup()">New Course</button>
        </div>

       

    </div>

    <div class="admin_courses_2">
        @foreach($cdata as $cdt)
        <div class="admin_courses_2_main">
            <div class="admin_courses_2_main_image">
                <img src={{ '../uploads/courses/'.$cdt->image }} alt="" />
            </div>
            <div class="admin_courses_2_main_info">
                <p>{{$cdt->title}}</p>
            </div>
            <div class="admin_courses_2_main_option">
                <a href="{{'adminCourse/'.$cdt->id.'/edit'}}"><button>Edit</button></a>
                <form action="{{ url('adminCourse/'.$cdt->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>


    <div class="coursemodal" id="coursemodal">
        <i class="fa-solid fa-xmark" onclick="closePopup()"></i>
        <form action="{{url('adminCourse')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <h2 style="color:darkred;">ADD NEW COURSE</h2>
            <label>Title</label><input name='title' type="text" placeholder="Enter Title"><br />
            <span class="text-danger">@error('title') {{"$message"}} @enderror</span>
            <label>Description</label><textarea name='description' type="text" placeholder="Enter Description" rows="10" cols="85"></textarea>
            <span class="text-danger">@error('description') {{"$message"}} @enderror</span>
            <div class="coursemodal_1">
                <label>Thumbnail</label><input style="height:3rem" type="file" name="image" class='coursemodal_1_input_1' id="">
                <span class="text-danger">@error('thumbnail') {{"$message"}} @enderror</span>
                <label>Lesson</label><input style="height:3rem" type="text" name="video" class='coursemodal_1_input_2' id="">
                <span class="text-danger">@error('lesson') {{"$message"}} @enderror</span>
            </div>
            <div class="coursemodal_2">
                <label>Price</label><input type='text' name='price' class='coursemodal_2_input_1' placeholder="Enter Price"><br />
                <span class="text-danger">@error('price') {{"$message"}} @enderror</span>
                <label>Duration</label><input type="text" name='duration' class='coursemodal_2_input_2' placeholder="Enter Duration"><br />
                <span class="text-danger">@error('duration') {{"$message"}} @enderror</span>
            </div>
            <div class="coursemodal_3">
                <label>Category</label><select id="category" name="categoryid">
                    @foreach($data as $dt)
                    <option class='coursemodal_3_input_2' value="{{$dt->categoryname}}">{{$dt->categoryname}}</option>
                    @endforeach
                </select>
                <span class="text-danger">@error('email') {{"$message"}} @enderror</span>
            </div>
            <button>Save</button>
        </form>
    </div>

    <script>
        const c = document.getElementById("coursemodal");
        // Get the modal
        var modal = document.getElementById('coursemodal');


        function openPopup() {
            c.classList.add("open-popup");
        }

        function closePopup() {
            c.classList.remove("open-popup");
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>

</html>