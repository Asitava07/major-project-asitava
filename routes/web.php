<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\userdetailsController;
use App\Http\Controllers\coursecategoryController;
use App\Http\Controllers\demoformCon;
use App\Http\Controllers\admincourseController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\videoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('navbar', function () {
    return view('layouts.navbar');
});

Route::get('navbar1', function () {
    return view('navbar1');
});


Route::get('login', function () {
    return view('authSystem.login');
});

Route::get('register', function () {
    return view('authSystem.registration');
});

Route::post('/reg', [authController::class, 'userreg'])->name('reg');
Route::post('/login', [authController::class, 'userlogin'])->name('login');
Route::put('upu/{id}', [authController::class, 'userProfileUpdate'])->name('upu');
Route::get('/display_User', [authController::class, 'displayUser']);
Route::get('/userEdit/{id}', [authController::class, 'userProfileEdit']);
Route::post('/userUpdate/{id}', [authController::class, 'userProfileUpdate']);
Route::get('/displaypn', [authController::class, 'displaypProfileNavbar']);
Route::post('/adminlogin', [authController::class, 'adminlogin'])->name('adminlogin');
Route::get('/userlogout', [authController::class, 'userloggingOut']);
Route::get('/adminlogout', [authController::class, 'adminloggingOut']);
Route::get('/display_blog', [authController::class, 'displayBlog']);
Route::get('/display_video/{id}', [authController::class, 'displayVideo']);
Route::get('/index', [authController::class, 'displayCourses']);
Route::get('/display_coursespage', [authController::class, 'displayCoursesPage']);
Route::get('/displayUserCourses', [authController::class, 'getUsersWithCourses']);
Route::get('/search', [authController::class, 'searchCourse']);


Route::view('aboutus', 'layouts.aboutus');

Route::view('demo', 'layouts.demo');

Route::get('career', function () {
    return view('layouts.career');
});

Route::get('blogdetails', function () {
    return view('layouts.blogdetails');
});

// s

Route::get('payment', function () {
    return view('layouts.payment');
});

Route::get('footer', function () {
    return view('layouts.footer');
});

Route::get('admindashboard', function () {
    return view('admin.admindashboard');
});

Route::get('ap', function () {
    return view('admin.adminprofile');
});
Route::get('as', function () {
    return view('admin.adminstudent');
});

Route::get('userdashboard', function () {
    return view('user.userdashboard');
});

Route::resources([
    'userdetails' => userdetailsController::class,
    'category' => coursecategoryController::class,
    'demoform' => demoformCon::class,
    'adminCourse' => admincourseController::class,
    'blog' => blogController::class,
    'video' => videoController::class,
]);

Route::post('/usercourse/{id}', [authController::class, 'usercourse']);
