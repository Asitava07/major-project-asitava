@extends('layouts.navbar')
@section('content')
@stop

@extends('layouts.footer')
@section('footer')
@stop


<link rel="stylesheet" href="css/style.css">
<link rel="shortcut icon" type="x-icon" href="images/bee4.png">
<title>LearningBee🐝|Registration</title>

<div class="login">
    <div class="login_section_1">
        <div class="login_section_1_img">
            <img src="https://images.pexels.com/photos/8500355/pexels-photo-8500355.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" />
            <div class="login_section_1_info">
                <h1>LearningBee🐝</h1>
                <p style="margin-bottom:20px;">
                    Welcome to LearningBee, your ultimate destination for online courses! We are a leading course provider offering a wide range of educational opportunities to help you achieve your learning goals. Our platform brings together a diverse selection of courses, ranging from academic subjects to professional skills and personal development.Join LearningBee today and embark on a transformative learning journey!
                </p>
            </div>
        </div>
    </div>
    <div class="login_section_2">
        <div class="login_section_2_login">
            <strong>
                <p>Welcome to Learning Bee!</p>
            </strong>
            <p style="font-size:4rem;font-weight:800;color:darkred">Get Registered!</p>
            <!-- <div class="login_option">
                <div id="bt" class="login_option_overlay"></div>
                <button onclick="user()">User</button>
                <button onclick="admin()">Admin</button>
            </div> -->
            <form action="/reg" id="user" class="register_form" method="post">
                {{ csrf_field() }}
                <label>Email</label>
                <input class="login_text_input" type="text" name="email" placeholder="Enter your Email">
                <span class="text-danger">@error('email') {{"$message"}} @enderror</span>
                <label>User Name</label>
                <input class="login_text_input" type="text" name="username" placeholder="Enter your User Name">
                <span class="text-danger">@error('username') {{"$message"}} @enderror</span>
                <label>Password</label>
                <input class="login_text_input" type="password" name="password" placeholder="Enter your Password">
                <span class="text-danger">@error('password') {{"$message"}} @enderror</span>
                <label>Confirm Password</label>
                <input class="login_text_input" type="password" name="confirmPassword" placeholder="Confirm your Password">
                <span class="text-danger">@error('confirm password') {{"$message"}} @enderror</span>
                <button type="submit">Register</button>
            </form>
            <!-- <form id="admin" class="register_form" action="#" method="post">
                {{ csrf_field() }}
                <label>Email</label>
                <input class="login_text_input" type="email" name="email" placeholder="Enter your Email">
                <label>Admin Name</label>
                <input class="login_text_input" type="text" name="usesrname" placeholder="Enter your User Name">
                <label>Password</label>
                <input class="login_text_input" type="password" name="password" placeholder="Enter your Password">
                <label>Confirm Password</label>
                <input class="login_text_input" type="password" name="confirmPassword" placeholder="Confirm your Password">
                <button type="submit">Register</button>
            </form> -->
        </div>
    </div>
</div>
<script src="https://kit.fontawesome.com/7755165d2a.js" crossorigin="anonymous"></script>
<script>
    function user() {
        document.getElementById("bt").style.transform = "translate(0%)";
        document.getElementById("user").style.transform = "translate(0%)";
        document.getElementById("admin").style.transform = "translate(100%)";
        document.getElementById("admin").style.opacity = "0";
        document.getElementById("user").style.opacity = "1";
    }

    function admin() {
        document.getElementById("bt").style.transform = "translate(100%)";
        document.getElementById("admin").style.transform = "translate(0%)";
        document.getElementById("user").style.transform = "translate(-100%)";
        document.getElementById("user").style.opacity = "0";
        document.getElementById("admin").style.opacity = "1";
    }
</script>
</body>

</html>