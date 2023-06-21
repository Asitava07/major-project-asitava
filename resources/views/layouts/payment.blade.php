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
    <title>LearningBee🐝|Payment</title>
</head>

<body>
    <div class="payment">
        <div class="payment_left">
            <div class="payment_left_main">
                <div class="payment_left_main_head">
                    <h1>Checkout</h1>
                    <div class="payment_option">
                        <div id="bt" class="payment_option_overlay"></div>
                        <button onclick="card()">Debit/Credit Card</button>
                        <button onclick="upi()">UPI</button>
                    </div>
                </div>
                <div id="card" class="payment_card">
                    <p>Card Type</p>
                    <div class="payment_left_main_items">
                        <div class="payment_left_main_item">
                            <img src="https://logos-world.net/wp-content/uploads/2020/09/Mastercard-Symbol.jpg" alt="" />
                        </div>
                        <div class="payment_left_main_item">
                            <img src="https://www.smartenergydecisions.com/upload/images/company_images/american_express.jpg" alt="" />
                        </div>
                        <div class="payment_left_main_item">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/Visa.svg/640px-Visa.svg.png" alt="" />
                        </div>
                        <div class="payment_left_main_item">
                            <img src="https://th.bing.com/th/id/R.48eaeab4cb35b98326e25a71479a5d19?rik=BTpamseHj921GA&riu=http%3a%2f%2fegov.eletsonline.com%2fwp-content%2fuploads%2f2015%2f03%2fRuPay.svg_.png&ehk=cXM%2bS%2f1N%2fCAoeUqAw5wMHW8czKqh3G%2bG%2fL%2bjOvXQeyk%3d&risl=&pid=ImgRaw&r=0" alt="" />
                        </div>
                    </div>
                    <form action="">
                        <label>Name on Card</label>
                        <input type="text" placeholder=" Enter Name on Card" required />
                        <label>Card Number</label>
                        <input type="text" placeholder="Enter Card Number" required />
                        <div class="payment_form_sec">
                            <div class="payment_form_sec_sub">
                                <label>Expiration Date</label>
                                <input type="text" placeholder="Enter Expiration Date" required />
                            </div>
                            <div class="payment_form_sec_sub">
                                <label>CVC</label>
                                <input type="text" placeholder="Enter your CVC" required />
                            </div>
                        </div>
                        <div class="payment_checkbox">
                            <input type="checkbox" /> Save your information for faster checkout
                        </div>
                        <div class="payment_button"><button>CONFIRM PAYMENT</button></div>
                    </form>
                </div>
                <div id="upi" class="payment_upi">
                    <p>Payment Option</p>
                    <div class="payment_left_main_items">
                        <div class="payment_left_main_item">
                            <img src="https://pbs.twimg.com/profile_images/814869197025148928/sdmlM4R-_400x400.jpg" alt="" />
                        </div>
                        <div class="payment_left_main_item">
                            <img src="https://1000logos.net/wp-content/uploads/2021/03/Paytm_Logo.jpg" alt="" />
                        </div>
                        <div class="payment_left_main_item">
                            <img src="https://images.hindustantimes.com/tech/img/2020/11/05/1600x900/image_-_2020-11-05T095740.083_1604550459365_1604550465218_1604550598928.jpg" alt="" />
                        </div>
                        <div class="payment_left_main_item">
                            <img src="https://logos-download.com/wp-content/uploads/2021/01/PhonePe_Logo-700x698.png" alt="" />
                        </div>
                    </div>
                    <div class="payment_upi_sub">
                        <label>UPI ID</label>
                        <input type="text" placeholder="Enter UPI ID" required />
                    </div>
                    <div class="payment_upi_verified">
                        <p>Verified</p>
                        <i class="fa-solid fa-circle-check"></i>
                    </div>
                    <button type='submit'>CONFIRM PAYMENT</button>
                </div>
            </div>
        </div>
        <div class="payment_right">
            <div class="payment_right_main">
                <p>Summary</p>
                <div class="payment_right_main_courses">
                    <div class="payment_courses_image">
                        <img src="https://images.pexels.com/photos/16475925/pexels-photo-16475925.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" />
                    </div>
                    <div class="payment_courses_info">
                        <b>
                            <p>TITLE</p>
                        </b>
                        <p>DESCRIPTION</p>
                        <p>PRICE</p>
                    </div>
                </div>
                <div class="payment_right_main_sub">
                    <p>Subtotal</p>
                    <p>PRICE</p>
                </div>
                <span class='payment_right_main_sub_line'></span>
                <div class="payment_right_main_sub">
                    <p>Coupon Discount</p>
                    <p>0%</p>
                </div>
                <span class='payment_right_main_sub_line'></span>
                <div class="payment_right_main_sub">
                    <p>TAX</p>
                    <p>5%</p>
                </div>
                <span class='payment_right_main_sub_line'></span>
                <div class="payment_right_main_sub">
                    <p><b>Total</b></p>
                    <p><b>TOTAL PRICE</b></p>
                </div>
            </div>
        </div>
    </div>
    <script>
        function card() {
            document.getElementById("bt").style.transform = "translate(0%)";
            document.getElementById("card").style.transform = "translate(0%)";
            document.getElementById("upi").style.transform = "translate(100%)";
            document.getElementById("upi").style.opacity = "0";
            document.getElementById("card").style.opacity = "1";
        }

        function upi() {
            document.getElementById("bt").style.transform = "translate(100%)";
            document.getElementById("upi").style.transform = "translate(0%)";
            document.getElementById("card").style.transform = "translate(-100%)";
            document.getElementById("card").style.opacity = "0";
            document.getElementById("upi").style.opacity = "1";
        }
    </script>
</body>

</html>