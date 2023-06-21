<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="images/bee4.png">
    <title>LearningBee🐝|User/Dashboard</title>
</head>

<body>
    <div class="admindashboardnav_navbar">
        <p>STUDENT AREA</p>
        <div class="userdp">
            <a href="/display_User" style="text-decoration:none">
                <li style="margin-left:15%">
                    <div class="user_profile_dashboard" style="margin-left:15%;margin-bottom:30%">
                        @if(Session::get('user_image'))
                        <img src={{'../uploads/userpic/'.Session::get('user_image')}} alt="userpic.png">
                        @else
                        <img src="images/dummy.png" alt="userpic.png">
                        @endif
                        <!-- <img src="https://images.pexels.com/photos/11452464/pexels-photo-11452464.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""> -->
                        <!-- <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="" style="height:100px;width:100px"> -->
                    </div>
                    <div style="font-size:1rem;font-weight:600;margin-top:-50px;">
                        <span style="color:black;background-color:blanchedalmond;padding:2px 3px;margin-left:20px;">{{Session::get('user')}}</span>
                    </div>
                </li>
        </div>
        <ul>
            <a href="/display_User">
                <li>
                    <i class="fa-sharp fa-solid fa-house"></i><span class="admindashboardnav_navbar_title">Profile</span>
                </li>
            </a>
            <a href="/displayUserCourses">
                <li><i class="fa-sharp fa-solid fa-book"></i><span class='admindashboardnav_navbar_title'>Course</span></li>
            </a>
            <a href="/userlogout">
                <li><i class="fa-solid fa-right-from-bracket"></i><span class='admindashboardnav_navbar_title'>Logout</span></li>
            </a>
        </ul>
    </div>
    @yield('user')
    <script src="https://kit.fontawesome.com/7755165d2a.js" crossorigin="anonymous"></script>
</body>

</html>