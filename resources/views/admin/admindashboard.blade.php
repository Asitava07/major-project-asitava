<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="images/bee4.png">
    <title>LearningBee🐝|Admin/Dashboard</title>
</head>

<body>
    <div class="admindashboardnav_navbar">
        <p>ADMIN AREA</p>
        <div class="userdp">
            <a href="/adminCourse" style="text-decoration:none">
                <li style="margin-left:15%">
                    <div class="user_profile" style="margin-left:15%;margin-bottom:30%">
                        <!-- <img src="https://images.pexels.com/photos/11452464/pexels-photo-11452464.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" style="height:100px;width:100px"> -->
                        <img src="images/admin.jpg" alt="" style="height:100px;width:100px">
                    </div>
                    <!-- <div style="font-size:1rem;font-weight:600">
                        <span style="color:black;background-color:blanchedalmond;padding:2px 3px;margin-left:20px;">{{Session::get('admin')}}</span>
                    </div> -->
                </li>
            </a>
        </div>
        <ul>
            <a href="{{url('adminCourse')}}">
                <li><i class=" fa-sharp fa-solid fa-book"></i><span class='admindashboardnav_navbar_title'>Course</span></li>
            </a>
            <a href="{{url('category')}}">
                <li><i class=" fa-solid fa-laptop-code"></i><span class='admindashboardnav_navbar_title'>Course Category</span></li>
            </a>
            <a href="{{url('blog')}}">
                <li><i class=" fa-sharp fa-solid fa-blog"></i><span class='admindashboardnav_navbar_title'>Blog</span></li>
            </a>
            <a href="{{url('userdetails')}}">
                <li><i class=" fa-sharp fa-solid fa-user"></i><span class='admindashboardnav_navbar_title'>Student</span></li>
            </a>
            <a href="/adminlogout">
                <li><i class="fa-solid fa-right-from-bracket"></i><span class='admindashboardnav_navbar_title'>Logout</span></li>
            </a>
        </ul>
    </div>
    @yield('admin')
    <script src="https://kit.fontawesome.com/7755165d2a.js" crossorigin="anonymous"></script>
</body>

</html>