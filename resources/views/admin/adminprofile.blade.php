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
    <title>LearningBee🐝|Admin/Profile</title>
</head>

<body>
    <div class="admin_profile_main">
        <p style="font-size:4rem;font-weight:800;color:#ffffff;background-color:red;border:none;padding:5px 10px;border-radius:10px">Welcome Back, {{Session::get('admin')}}</p>
        <div class="admin_profile_main_sec">
            <div class="admin_profile_main_sec_1">
                <div class="admin_profile_main_sec_1_image">
                    <img src="https://images.pexels.com/photos/4927361/pexels-photo-4927361.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" />
                </div>
            </div>
            <div class="admin_profile_main_sec_2">
                <p style="font-size:4rem;font-weight:800;color:#000;background-color:gold;border:none;padding:5px 10px;border-radius:10px">Details</p>
                <div class="admin_profile_main_sec_2_form">
                    <form action="" method="post">
                        {{ csrf_field() }}
                        <label>First Name</label>
                        <input class="login_text_input" name="fn" type="text" placeholder="Enter your first name" required />
                        <label>Last Name</label>
                        <input class=" login_text_input" name="ln" type="text" placeholder="Enter your last name" required />
                        <!-- <p>Gender</p>
                        <div class="gender_input" style="display:flex;justify-content:space-evenly;">
                            <input name="g" type="radio" value="Male">
                            <label for="male">Male</label><br>
                            <input name="g" type="radio" value="Female">
                            <label for="female">Female</label><br>
                            <input name="g" type="radio" value="Others">
                            <label for="others">Others</label><br>
                        </div> -->
                        <label>Phone Number</label>
                        <input class="login_text_input" name="ph" type="number" placeholder="Enter your Phone Number" required />
                        <label>Date Of Birth</label>
                        <input class="login_text_input" name="dob" type="date" placeholder="Enter your Date of Birth" required />
                        <!-- <label>New Password</label>
                        <input class="login_text_input" type="password" placeholder="Enter your new Password" required />
                        <label>Confirm Password</label>
                        <input class="login_text_input" type="Password" placeholder="Confirm your Password" required /> -->
                        <button>Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>