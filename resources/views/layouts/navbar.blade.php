<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="{{ asset ('images/footer_icons/bee4.png') }}">
    <link href="{{ asset ('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>LearningBee🐝</title>
</head>

<body>
    <header>
        <nav class="navbar" id="navbar">
            <img src="{{ asset ('images/logo_lightmode.png') }}" id="logo" alt="">
            @if(Session::get('user') or Session::get('admin'))
            <ul>
                
                <a href="/index">
                    <li class='underline_effect'>Home</li>
                </a>
                <a href="/display_coursespage">
                    <li class='underline_effect'>Courses</li>
                </a>
                <a href="/career">
                    <li class='underline_effect'>Careers</li>
                </a>
                <a href="/display_blog">
                    <li class='underline_effect'>Blogs</li>
                </a>
                <a href="/aboutus">
                    <li class='underline_effect'>About Us</li>
                </a>
                @if(Session::get('user'))
                <a href="/display_User">
                    <li>
                        <div class="user_profile">
                        @if(Session::get('user_image'))
                        <img src={{'../uploads/userpic/'.Session::get('user_image')}} alt="userpic.png">
                        @else
                        <img src="images/dummy.png" alt="userpic.png">
                        @endif
                            <!-- <img src="{{'../uploads/userpic/'.Session::get('user_image')}}" alt=""> -->
                        </div>
                    </li>
                </a>
                @else
                <a href="{{url('adminCourse')}}">
                    <li>
                        <div class="user_profile">
                            <img src="images/admin.jpg" style="background-color:white;" alt="">
                        </div>
                    </li>
                </a>
                @endif
                <!-- <li><i class="fa-solid fa-sun" id="toggledark"></i></li> -->
            </ul>
            @else
            <ul>
                <a href="/index">
                    <li class='underline_effect'>Home</li>
                </a>
                <a href="/display_coursespage">
                    <li class='underline_effect'>Courses</li>
                </a>
                <a href="/career">
                    <li class='underline_effect'>Careers</li>
                </a>
                <a href="/display_blog">
                    <li class='underline_effect'>Blogs</li>
                </a>
                <a href="/aboutus">
                    <li class='underline_effect'>About Us</li>
                </a>
                <a href="/login">
                    <li class='underline_effect'>Login</li>
                </a>
                <!-- <li><i class="fa-solid fa-sun" id="toggledark"></i></li> -->
            </ul>
            @endif
            <div class="navbar_hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>
    <div class="scrollup" onclick="scrollUp()">
        <i class="fa-solid fa-chevron-up fa-lg"></i>
    </div>
    @yield('content')
    <script src="https://kit.fontawesome.com/7755165d2a.js" crossorigin="anonymous"></script>
    <script>
        function scrollUp() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>
</body>

</html>