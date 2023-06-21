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
    <style>

    </style>
</head>

<body>
    <div class="user_profile_main">
        <p style="font-size:4rem;font-weight:800;color:#ffffff;background-color:red;border:none;padding:5px 10px;border-radius:10px">Welcome, {{Session::get('user')}}</p>
        <div class="user_profile_main_sec">

            <div class="userprofile">
                <div class="profile-main">
                    @foreach ($display_User as $users)
                    <div class="profilepics">
                        @if($users->pic)
                        <img src={{'../uploads/userpic/'.$users->pic}} alt="userpic.png">
                        @else
                        <img src="images/dummy.png" alt="userpic.png">
                        @endif
                    </div>
                    <div class="profileinfo">

                        <label>Name :</label>{{ $users->firstname }} {{ $users->lastname }}<br>
                        <label>Username :</label> {{ $users->username }} <br>

                        <label>Email :</label> {{ $users->email }}<br>
                        <label>Phone no :</label> {{ $users->phoneno }}<br>
                        <label>DOB :</label>{{ $users->DOB }}<br>
                        <!-- <label>Address :</label>{{ $users->address }}<br> -->
                        <a href="/userEdit/{id}"><button style="font-size:2rem">Update Profile</button></a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
</body>

</html>