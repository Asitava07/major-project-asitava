<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/navbar1.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <header>
        <div class="nav-back">
            <div class="navbar">
                <div class="logo">
                    <h2>Library Management System</h2>
                    </lord-icon>
                </div>
                <div class="navbar-nav">

                    <ul type="none">
                        @if(Session::get('user'))
                        <a href="/home">
                            <li><i class="fa-solid fa-house-user"></i>Home</li>
                        </a>
                        <li class="notification" onclick="open_sidemenu()"><i class="fa-solid fa-bell"></i>Notification</li>
                        <li class="settings" onclick="open_dropdown()"><i class="fa-solid fa-gear"></i>Settings</li>
                        <li class="logout" onclick="openPopup()">
                            <i class="fa-solid fa-right-from-bracket"></i>Logout
                        </li>
                        @else
                        <!-- <li onclick="opensignup()"><i class="fa-solid fa-user-plus"></i>Sign Up</li> -->
                        <li onclick="open_loginForm()"><i class="fa-solid fa-right-to-bracket"></i>Log in</li>

                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <div class="notification-sidemenu" id="notification-sidemenu">
            <div class="cancel" onclick="close_sidemenu()"><i class="fa-solid fa-xmark"></i></div>
            <h3>Notification</h3>
            <ul type="none">
                <li>Profile Settings</li>
                <li>Contact us</li>
            </ul>
        </div>
        <div class="settings-dropdown" id="settings-dropdown">
            <div class="cancel" onclick="close_dropdown()"><i class="fa-solid fa-xmark"></i></div>
            <ul type="none">
                <li>Profile Settings</li>
                <li>Contact us</li>
            </ul>
        </div>
        <div class="confirm" id="confirm">
            <div class="title1">
                <p>Do you want to logout?</p>
            </div>
            <div class="option1">
                <div class="img">
                    <img src="pictures/icons/logout_icon-removebg-preview.png" alt="">
                </div>
                <div class="y-n">
                    <button><a class="yes" href="/logout">Yes</a></button>
                    <button onclick="closePopup()">No</button>
                </div>
            </div>
        </div>
        <div class="signup" id="signup">
            <div class="title">
                <div class="name">
                    <h2>Sign up!</h2>
                </div>
                <div class="cross"><i class="fa-solid fa-rectangle-xmark" onclick="closesignup()"></i></div>
            </div>
            <div class="signup_error">
            </div>
            <div class="form">
                <form action="/signup" method="POST">
                    @csrf
                    <input type="email" name="email" id="email" placeholder="enter your valid email id"><br>
                    <input type="text" name="aid" id="aid" placeholder="Create a admin id"><br>
                    <input type="password" name="pass" id="pass" placeholder="Create a password"><br>
                    <!-- <input type="password" name="cpass" id="cpass" placeholder="confirm password"><br> -->
                    <input type="submit" name="submit1" value="Register now">
                </form>
                <div class="extra">
                    <p>or, sign up with </p>
                    <div class="social">
                        <img class="google" src="pictures/icons/google-removebg-preview.png" alt="">
                        <img class="facebook" src="pictures/icons/Facebook_icon.svg-removebg-preview.png" alt="">
                        <img class="github" src="pictures/icons/github-removebg-preview.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="login" id="login">
            <div class="title">
                <div class="name">
                    <h3>Login!</h3>
                </div>
                <div class="cross"><i class="fa-solid fa-rectangle-xmark" onclick="close_loginForm()"></i></div>
            </div>
            <div class="login_error">
            </div>
            <div class="form">
                <form action="/login" method="POST">
                    @csrf
                    <input type="text" name="a_logid" id="a_logid" placeholder="enter your admin id"><br>
                    <input type="password" name="log_pass" id="log_pass" placeholder="enter password"><br>
                    <a href="forgot-pass">Forgot password?</a>
                    <input type="submit" name="submit2" value="Submit">
                </form>
            </div>
            <div class="extra">
                <p>or, log in with </p>
                <div class="social">
                    <img class="google" src="pictures/icons/google-removebg-preview.png" alt="">
                    <img class="facebook" src="pictures/icons/Facebook_icon.svg-removebg-preview.png" alt="">
                    <img class="github" src="pictures/icons/github-removebg-preview.png" alt="">
                </div>
            </div>
        </div>
    </header>
    @yield('content')

    <footer>
        <div class="footer">
            <p>libraryMS&copy2023</p>
        </div>
    </footer>
    <script src="js/logout.js"></script>
</body>

</html>