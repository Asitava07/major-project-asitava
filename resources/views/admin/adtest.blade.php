@extends('layouts.navbar')
@section('content')
@stop

@extends('admin.admindashboard')
@section('admin')
@stop

@extends('layouts.footer')
@section('footer')
@stop


<title>LearningBee🐝|Admin-Section</title>

<div class="courses_1">
    <div class="courses_1_search">
        <input type="text" placeholder='Search Course' /><button>Search</button>
    </div>
    <div class="courses_1_filter">
        <p>Looking for any Courses? Search as per your need.</p>
        <button>Filter</button>
    </div>
</div>
<div class="courses_2">
    <p>Welcome Back, Ready for your next Lesson?</p>
    <div class="courses_2_section">
        <div class="courses_2_card">
            <div class="courses_2_card_img">
                <img src="https://images.unsplash.com/photo-1560732488-6b0df240254a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="" />
            </div>
            <p>CLOUD COMPUTING WITH AWS</p>
            <p>Sarah</p>
        </div>
    </div>
    <div class="courses_2_nav_personal">
        <button><i class="fa-solid fa-chevron-left"></i></button><button><i class="fa-solid fa-chevron-right"></i></button>
    </div>
</div>
<div class="courses_3">
    <h1>Our Courses</h1>
    <div class="courses_3_section">
        <div key={course.id} class="courses_3_section_main">
            <img src="https://images.pexels.com/photos/16475925/pexels-photo-16475925.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" />
            <p class='courses_3_title_underline'>TITLE</p>
            <div class="course_3_content">
                <div class="course_3_content_sub1">
                    <div class="course_3_content_sub1_sub">
                        <i class="fa-solid fa-layer-group"></i>
                        <p>CATEGORY</p>
                    </div>
                    <div class="course_3_content_sub1_sub">
                        <i class="fa-solid fa-clock"></i>
                        <p>DURATION</p>
                    </div>
                </div>
                <p>DESCRIPTION</p>
                <div class="course_3_content_sub2">
                    <p>Rating: RATING/5</p>
                    <p>Price: PRICE</p>
                </div>
                <a href="/coursesdetails"><button>Apply Now</button></a>
            </div>
        </div>
    </div>
</div>
<div class="course_4">
    <div class="course_4_title">
        <h1>Assessments,<br /><span class="half_text_color font_size7">Quizes</span>,Tests</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni laboriosam quasi necessitatibus vero magnam nesciunt</p>
    </div>
    <div class="course_4_section">
        <div class="course_4_section_main">
            <button>Question 1</button>
            <p>How to Center a Div?</p>
            <div class="course_4_section_main_1">
                <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Y29kaW5nfGVufDB8fDB8fA%3D%3D&w=1000&q=80" alt="" />
            </div>
            <div class="course_4_section_main_2">
                <i class="fa-solid fa-paper-plane"></i>
                <p>Your Answer was sent <br /> Successfully!</p>
            </div>
        </div>
    </div>
</div>
</body>

</html>