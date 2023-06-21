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
    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
    <title>LearningBee🐝|Admin/Blogs</title>
</head>

<body>
    <div class="admin_blog_1">
        <div class="admin_blog_1_head">
            <p style="font-size:4rem;font-weight:800;color:#ffffff;background-color:red;border:none;padding:5px 10px;border-radius:10px">Blogs</p>
            <button onclick="openPopup()">New Blog</button>
        </div>
        <div class="courses_1_search">
            <input type="text" placeholder='Search Course' /><button>Search</button>
        </div>
    </div>
    @foreach($data as $dt)
    <div class="admin_blog_2">
        <div class="admin_blog_2_main">
            <div class="admin_blog_2_main_1">
                <img src={{ '../uploads/blogs/'.$dt->image }} alt="" />
            </div>
            <div class="admin_blog_2_main_2">
                <h1>{{$dt->title}}</h1>
                <p>{{!! $dt->description !!}}</p>
                <div class="admin_blog_2_main_2_button">
                    <!-- <a href="{{'blog/'.$dt->id.'/edit'}}"><button>Edit</button></a> -->
                    <form action="{{ url('blog/'.$dt->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                    <!-- <a href=""></a> -->
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="blogmodal" id="blogmodal">
        <i class="fa-solid fa-xmark" onclick="closePopup()"></i>
        <form action="{{url('blog')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <h2 style=" color:darkred; font-size:2rem;">PUBLISH NEW BLOG</h2>
            <label>Title</label><input type="text" placeholder="Enter Title" name="title"><br />
            <label>Blog</label><textarea name="description" rows="5" cols="10"></textarea><br />
            <label>Image</label><input style="height:3rem" type="file" name="image" id="">
            <button>Save</button>
        </form>
    </div>
    <script type="text/javascript">
        const b = document.getElementById("blogmodal");

        function openPopup() {
            b.classList.add("open-modal");
        }

        function closePopup() {
            b.classList.remove("open-modal");
        }

        // for text editor

        // var ck = CKEDITOR.replace('description');

        // var TextGrab = CKEDITOR.instances['description'].getData();
        // TextGrab = $(TextGrab).text(); // html to text        
        // TextGrab = TextGrab.replace(/\r?\n|\r/gm, " "); // remove line breaks   
        // TextGrab = TextGrab.replace(/\s\s+/g, " ").trim(); // remove double spaces
    </script>
</body>

</html>