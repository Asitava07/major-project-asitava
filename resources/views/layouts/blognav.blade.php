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
    <title>LearningBee🐝|Blogs</title>
</head>

<body>
    <div class="blog_1">
        <!-- <img src="https://images.pexels.com/photos/1591056/pexels-photo-1591056.jpeg" alt="" /> -->
        <img src="images/blogs.png" alt="" />
    </div>
    <div class=" blog_2">
        <div class="blog_2_main">
            <h1><em>How helpful</em> LearningBee🐝<em>is according to Aritra, our alumni !</em></h1>
            <div class="blog_2_main_content">
                <div class="blog_2_main_content_image">
                    <img src="images/aritra.webp" alt="" />
                </div>
                <p>"Hi, I'm Aritra,has been connected to LearningBee for quite a long time now.LearningBee has been an incredible discovery for me! The platform offers a wide range of courses that cater to my interests and professional goals. The user-friendly interface makes navigation seamless, and the quality of the course content is exceptional. The instructors are knowledgeable and engaging, providing valuable insights and guidance throughout my learning journey. I appreciate the flexibility of self-paced learning, allowing me to study at my own convenience. LearningBee has undoubtedly enhanced my skills and opened up new opportunities and finally I'm placed in my dream company. Highly recommended!"</p>
            </div>
            <span class='blog_2_line'></span>
        </div>
    </div>
    <div class="blog_3">
        <p>Related Blogs</p>
        <div class="blog_3_section">
            @foreach($display_blog as $dt)
            <div class="blog_3_section_main">
                <div class="blog_3_section_main_image">
                    <img src={{ '../uploads/blogs/'.$dt->image }} alt="" />
                </div>
                <p style="font-size:4rem;color:brown;"><b>{{$dt->title}}</b></p>
                <div class="blog_3_section_main_user">
                    <div class="blog_3_section_main_user_dp">
                        <img src="images/logo_lightmode.png" alt="" />
                    </div>
                    <p style="font-size:2rem;color:black;">LearningBee🐝</p>
                </div>
                <div class="blog_3_section_main_content">
                    <a style="text-decoration:none;" href="/blog/{{$dt->id}}"><button style="background-color:brown; color:white; padding:20px; margin:20px 50px; font-weight:600; font-size:2rem; border:none; border-radius:12px;">Read More</button></a>
                </div>
            </div>
            @endforeach
            <div class="blog_3_pagination">
                <button><i class="fa-solid fa-chevron-left"></i></button>
                <button><i class="fa-solid fa-chevron-right"></i></button>
            </div>
        </div>
    </div>
</body>

</html>