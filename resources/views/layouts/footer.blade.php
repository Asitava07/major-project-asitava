<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    @yield('footer')
    <footer class="footer">
        <div class="footer_sec_1">
            <div class="footer_sec_1_1">
                <img src="{{ asset ('images/logo_darkmode.png') }}" alt="" />
                <span class="footer_top_line"></span>
                <h1>The E-Learning Platform</h1>
            </div>
            <div class="footer_sec_1_2">
                <p>Follow Us:</p>
                <div class="follow">
                    <div class="follow_main">
                        <div class="follow_main_icon">
                            <img src="{{ asset ('images/footer_icons/facebook.png') }}" alt="" />
                        </div>
                        <p class="follow_main_info">Facebook</p>
                    </div>
                    <div class="follow_main">
                        <div class="follow_main_icon">
                            <img src="{{ asset ('images/footer_icons/instagram.png') }}" alt="" />
                        </div>
                        <p class="follow_main_info">Instagram</p>
                    </div>
                    <div class="follow_main">
                        <div class="follow_main_icon">
                            <img src="{{ asset ('images/footer_icons/linkedin.png') }}" alt="" />
                        </div>
                        <p class="follow_main_info">Linkedin</p>
                    </div>
                    <div class="follow_main">
                        <div class="follow_main_icon">
                            <img src="{{ asset ('images/footer_icons/twitter.png') }}" alt="" />
                        </div>
                        <p class="follow_main_info">Twitter</p>
                    </div>
                    <div class="follow_main">
                        <div class="follow_main_icon">
                            <img src="{{ asset ('images/footer_icons/youtube.png') }}" alt="" />
                        </div>
                        <p class="follow_main_info">Youtube</p>
                    </div>
                </div>
            </div>
            <div class="footer_sec_1_3">
                <p>Contact Us:</p>
                <div class="footer_sec_1_3_email">
                    <p>Email:</p>
                    <a href="mailto:learningbee@gmail.com">
                        <p>learningbee@gmail.com</p>
                    </a>
                </div>
                <div class="footer_sec_1_3_phone">
                    <p>24x7 Phone:</p>
                    <a href="tel:91+ 1231414245346">
                        <p>1231414245346</p>
                    </a>
                </div>
                <div class="footer_sec_1_3_address">
                    <p>Address:</p>
                    <p>
                        Street:3834 Sundown Lane <br />
                        City:Austin <br />
                        State/province/area:Texas
                    </p>
                </div>
                <button onclick="openContact()">Contact Us</button>
            </div>
        </div>
        <div class="footer_sec_2">
            <div class="footer_sec_2_1">
                <p>Subscribe to get our Newsletter</p>
                <div class="footer_mid_input">
                    <input type="email" name="footer_email" class="footer_email" placeholder="Enter Your Email" />
                    <button type="button" name="footer_button" class="footer_button">
                        SUBSCRIBE
                    </button>
                </div>
            </div>
            <div class="footer_sec_2_2">
                <div class="footer_bottom">
                    <p>Careers</p>
                    <span class="footer_bottom_line"></span>
                    <p>Privacy Policy</p>
                    <span class="footer_bottom_line"></span>
                    <p>Terms & Condition</p>
                    <br /><br />
                </div>
                <div class="footer_bottom_copyright">
                    <i class="fa-regular fa-copyright"></i>
                    2023 Learning Bee Inc.
                </div>
            </div>
        </div>
    </footer>

    <!-- <div class="contactusmodal" id="contactusmodal">
        <i class="fa-solid fa-xmark" onclick="closeContact()"></i>
        <h1>Contact Us</h1>
        <form action="">
            <label>Name</label><br /><input name="title" type="text" placeholder="Enter your Name" required /><br />
            <label>Email</label><br /><input name="title" type="text" placeholder="Enter your Name" required /><br />
            <label>Message</label><br /><textarea name="title" type="text" placeholder="Enter your Name" required /><br />
            <button>Submit</button>
        </form>
    </div> -->



    <script src="https://kit.fontawesome.com/7755165d2a.js" crossorigin="anonymous"></script>
    <script>
        const con = document.getElementById("contactusmodal");
        // Get the modal


        function openContact() {
            con.classList.add("open-popup");
        }

        function closeContact() {
            con.classList.remove("open-popup");
        }
    </script>
</body>

</html>