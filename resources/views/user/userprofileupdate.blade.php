@extends('layouts.navbar')
@section('content')
@stop

@extends('user.userdashboard')
@section('user')
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
    <title>LearningBee🐝|User/Profile</title>
</head>

<body>
    <div class="user_profile_main">
        <p style="font-size:4rem;font-weight:800;color:#ffffff;background-color:red;border:none;padding:5px 10px;border-radius:10px">Welcome, {{Session::get('user')}}</p>
        <div class="user_profile_main_sec">
            <!-- <div class="user_profile_main_sec_1">
                <div class="user_profile_main_sec_1_image">
                    <img src="https://images.pexels.com/photos/4927361/pexels-photo-4927361.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" />
                </div>
            </div> -->
            <div class="user_profile_main_sec_2">
                <p style="font-size:4rem;font-weight:800;color:#000;background-color:gold;border:none;padding:5px 10px;border-radius:10px">Details</p>
                <div class="user_profile_main_sec_2_form">
                    <form action="/userUpdate/{{$upu[0]->id}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <label>First Name</label>
                        <input class=" login_text_input" name="firstname" type="text" value="{{$upu[0]->firstname}}">
                        <span class="text-danger">@error('firstname') {{"$message"}} @enderror</span>
                        <label>Last Name</label>
                        <input class=" login_text_input" name="lastname" type="text" value="{{$upu[0]->lastname}}">
                        <span class="text-danger">@error('lastname') {{"$message"}} @enderror</span>
                        <label>E-mail</label>
                        <input class="login_text_input" name="email" type="email" value="{{$upu[0]->email}}" readonly>
                        <span class="text-danger">@error('email') {{"$message"}} @enderror</span>
                        <label>Username</label>
                        <input class="login_text_input" name="username" type="text" value="{{$upu[0]->username}}" readonly>
                        <span class="text-danger">@error('username') {{"$message"}} @enderror</span>
                        <label>Phone Number</label>
                        <input class="login_text_input" name="phoneno" type="text" value="{{$upu[0]->phoneno}}">
                        <span class="text-danger">@error('phoneno') {{"$message"}} @enderror</span>
                        <label>Date Of Birth</label>
                        <input class="login_text_input" name="DOB" type="date" value="{{$upu[0]->DOB}}">
                        <span class="text-danger">@error('DOB') {{"$message"}} @enderror</span>
                        <label>Profile Picture</label>
                        <input class="login_text_input" name="pic" type="file" value="{{'../uploads/userpic/'.$upu[0]->pic}}">
                        <span class="text-danger">@error('pic') {{"$message"}} @enderror</span>
                        <button>Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>