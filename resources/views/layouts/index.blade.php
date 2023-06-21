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
    <title>LearningBee🐝|Home</title>
</head>

<body>
    <div class="home_1">
        <div class="home_1_info">
            <p class='home_1_title'>LearningBee</p>
            <p class='home_1_title_tagline'>Buzzing with Knowledge</p>
            <p class="home_1_title_desc">
                Welcome to Learning Bee, the online learning platform that empowers you to achieve your full potential. At Learning Bee, we believe that education should be accessible to everyone, no matter where you are or what your background is.
            </p>

        </div>
        <img src="images/online_study.svg" alt="" />
    </div>
    <div class="home_5">
        <div class="home__title_info">
            <p class='home_5_title'>Explore Courses</p>
        </div>

        <div class="home_5_section">
            @foreach($index as $cdt)
            <div class="home_5_section_main">
                <div class="home_5_section_main_img">
                    <img src={{ '../uploads/courses/'.$cdt->image }} alt="" />
                </div>
                <div class="home_5_section_main_content">
                    <h1 style="color:#ffffff;background-color:indigo;font-weight:800;padding:20px;border-radius:12px;">{{$cdt->title}}</h1>

                    <div id="stars">
                        <i class="fa-solid fa-star" style="color:gold"></i>
                        <i class="fa-solid fa-star" style="color:gold"></i>
                        <i class="fa-solid fa-star" style="color:gold"></i>
                        <i class="fa-solid fa-star" style="color:gold"></i>
                        <i class="fa-solid fa-star" style="color:gray"></i>
                    </div>

                    <p>💲{{$cdt->price}}</p>
                    <!-- <a href="{{url('adminCourse/'.$cdt->id)}}"><button>Apply Now</button></a> -->
                </div>
            </div>
            @endforeach
        </div>

        <div class="home_5_see">
            <button>See All</button>
            <i class="fa-solid fa-arrow-right"></i>
        </div>
    </div>
    <div class="home_2">
        <div class="home__title_info">
            <p class='home_2_title'>Our Success</p>
            <p>Since its launch, Learning Bee has achieved remarkable success in helping learners from all backgrounds and levels achieve their learning goals. <br /> We are proud to have formed partnerships with leading organizations and industry experts, further enhancing the quality and value of our courses.</p>
        </div>
        <div class="home_2_stats">
            <div class="home_2_stats_info">
                15K+
                <p>Students</p>
            </div>
            <div class="home_2_stats_info">
                75
                <p>Total Success</p>
            </div>
            <div class="home_2_stats_info">
                35
                <p>Main Questions</p>
            </div>
            <div class="home_2_stats_info">
                36
                <p>Chief Experts</p>
            </div>
            <div class="home_2_stats_info">
                16
                <p>Years of Experience</p>
            </div>
        </div>
    </div>
    <div class="home_3">
        <div class="home__title_info">
            <p class='home_3_title'>All-In-One <br /><span class="half_text_color font_size7">E-Learning Platform</span></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, quaerat. Incidunt, maxime excepturi molestias ratione vitae dolorem quia dolore necessitatibus laborum praesentium? Fuga unde eum quisquam tempore quod eos quos!</p>
        </div>
        <div class="home_3_card">
            <div class="home_3_card_info">
                <span class="home_3_round"><i class="fa-solid fa-file-invoice"></i></span>
                <h1>Online,Billing,Invoicing,& Contracts</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, quaerat. Incidunt, maxime excepturi molestias ratione vitae dolorem quia dolore necessitatibus laborum praesentium?</p>
            </div>
            <div class="home_3_card_info">
                <span class=" home_3_round"><i class="fa-solid fa-calendar-days"></i></span>
                <h1>Online,Billing,Invoicing,& Contracts</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, quaerat. Incidunt, maxime excepturi molestias ratione vitae dolorem quia dolore necessitatibus laborum praesentium?</p>
            </div>
            <div class="home_3_card_info">
                <span class=" home_3_round"><i class="fa-solid fa-face-smile"></i></span>
                <h1>Online,Billing,Invoicing,& Contracts</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, quaerat. Incidunt, maxime excepturi molestias ratione vitae dolorem quia dolore necessitatibus laborum praesentium?</p>
            </div>
        </div>
    </div>
    <div class="home_4">
        <div class="home__title_info">
            <p class='home_4_title'>Features of <span class="half_text_color font_size7">Learning Bee?</span></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quos natus voluptatibus pariatur dicta. Suscipit eos nobis tempora ea harum adipisci nemo? Quaerat placeat sunt sapiente dolor neque tempora eum.</p>
        </div>
        <div class="home_4_section">
            <div class="home_4_section_info">
                <h1>A <span class="red_text font_size3">Wide Range</span> of Courses:</h1>
                <p>Learning Bee offers a diverse range of courses across various industries, ensuring that learners can find the course that suits their learning needs and career aspirations.</p>
            </div>
            <div class="home_4_section_img">
                <div class="home_4_section_img_main">
                    <span></span>
                    <span></span>
                    <img src="https://images.pexels.com/photos/4145153/pexels-photo-4145153.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" />
                </div>
            </div>
        </div>
        <div class="home_4_section">
            <div class="home_4_section_info">
                <h1><span class="red_text font_size3">Personalized</span> Learning:</h1>
                <p>Learning Bee understands that everyone has a unique learning style and pace, which is why we offer personalized instruction and flexible scheduling to accommodate each learner's needs.</p>
            </div>
            <div class="home_4_section_img">
                <div class="home_4_section_img_main">
                    <span></span>
                    <span></span>
                    <img src="https://images.pexels.com/photos/4145153/pexels-photo-4145153.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" />
                </div>
            </div>
        </div>
        <div class="home_4_section">
            <div class="home_4_section_info">
                <h1><span class="red_text font_size3">Expert</span> Instructors:</h1>
                <p>Our instructors are industry experts with real-world experience, providing learners with the most relevant and up-to-date knowledge and skills.</p>
            </div>
            <div class="home_4_section_img">
                <div class="home_4_section_img_main">
                    <span></span>
                    <span></span>
                    <img src="https://images.pexels.com/photos/4145153/pexels-photo-4145153.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" />
                </div>
            </div>
        </div>
        <div class="home_4_see">
            <button>See More Features</button>
            <i class="fa-solid fa-arrow-right"></i>
        </div>
    </div>
    <div class="home_6">
        <div class="home_6_info">
            <h1>What They Say?</h1>
            <p>LearningBee has been an incredible discovery for me! The platform offers a wide range of courses that cater to my interests and professional goals. The user-friendly interface makes navigation seamless, and the quality of the course content is exceptional. The instructors are knowledgeable and engaging, providing valuable insights and guidance throughout my learning journey. I appreciate the flexibility of self-paced learning, allowing me to study at my own convenience. LearningBee has undoubtedly enhanced my skills and opened up new opportunities.</p>
            <p>Highly recommended!</p>
        </div>
        <div class="home_6_review">
            <div class="home_6_review_img">
                <img src="https://images.pexels.com/photos/3201580/pexels-photo-3201580.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" />
            </div>
            <div class="home_6_review_main">
                <p>Hi, I'm Aritra, has been subscribed LearningBees for quite a long time now. I always find this very helpful and full of good course contents. LearningBees helped me a lot to learn and finally I'm placed in my dream company.</p>
                <p id='student_name'>Aritra Hazra</p>
            </div>
            <button><i class="fa-solid fa-chevron-right"></i></button>
        </div>
    </div>
</body>

</html>