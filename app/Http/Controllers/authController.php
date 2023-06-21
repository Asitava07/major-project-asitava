<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userinfo;
use Illuminate\Support\Facades\Hash;
use App\Rules\admin_auth_pass;
use App\Rules\admin_auth_username;
use App\Models\blog;
use App\Models\course;
use App\Models\usercourse;
use Session;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

// use Illuminate\Support\Facades\Auth;


class authController extends Controller
{
    //

    // USER
    // registration

    public function userreg(Request $req)
    {
        $req->validate([
            'username' => 'required|unique:userinfos|string|min:3|max:255',
            'email' => 'required|email|unique:userinfos',
            'password' => 'required_with::confirmPassword|same:confirmPassword|min:5|max:8',
            'firstname' => 'string|min:1|max:255',
            'lastname' => 'string|min:1|max:255',
            'phoneno' => 'unique:userinfos|string|min:10|max:10',
            'DOB' => 'date',
        ]);

        $info = new Userinfo();
        $info->firstname = $req->firstname;
        // $firstname = $info->firstname ?? '';
        $info->lastname = $req->lastname;
        $info->email = $req->email;
        $info->username = $req->username;
        $info->password = Hash::make($req->password);
        $info->phoneno = $req->phoneno;
        $info->DOB = $req->DOB;
        $res = $info->save();
        if ($res) {
            return redirect("login");
        } else {
            return back()->with('fail', "Something wrong! Try again!");
        }
    }

    // login

    public function userlogin(Request $req)
    {
        $req->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = Userinfo::where('username', '=', $req->username)->first();
        if ($user) {
            if (Hash::check($req->password, $user->password)) {
                $req->session()->put('user', $user->username);
                Session()->put('user_image', $user->pic);
                Session()->put('userid', $user->id);
                return redirect("index");
            } else {
                return back()->with('fail', "Wrong password! Try again!");
            }
        } else {
            return back()->with('fail', "This username doesn't exist!");
        }
    }

    public function userloggingOut()
    {
        if (Session()->has('user')) {
            Session()->pull('user');
            return redirect('index');
        }
    }

    public function displayUser()
    {

        $loggedInUserId = session()->get('user');
        $users = Userinfo::where('username', $loggedInUserId)->get();
        return view("user.userprofile", ["display_User" => $users]);
    }

    public function userProfileEdit($id)
    {
        $id = session()->get('user');
        // print_r($id);
        $user = Userinfo::where('username', $id)->get();
        // if ($user) {
        //     print_r('true');
        // } else {
        //     print_r('false');
        // }

        return view('user.userprofileupdate', ['upu' => $user]);
    }

    public function userProfileUpdate(Request $req, $id)
    {

        $req->validate([
            'firstname' => 'nullable|string|min:1|max:255',
            'lastname' => 'nullable|string|min:1|max:255',
            'username' => 'string|min:3|max:255',
            'email' => 'email',
            'phoneno' => 'string|min:10|max:10',
            'DOB' => 'nullable|date',
            'pic' => 'nullable|image',
        ]);
        $user = Userinfo::find($id);
        $user->firstname = $req->input('firstname');
        $user->lastname = $req->input('lastname');
        $user->email = $req->input('email');
        $user->username = $req->input('username');
        $user->phoneno = $req->input('phoneno');
        $user->DOB = $req->input('DOB');
        $user->pic = $req->pic;
        if ($req->hasfile('pic')) {
            $file = $req->file('pic');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/userpic/', $filename);
            $user->pic = $filename;
        }
        $user->update();
        return redirect('/display_User');
    }

    // ADMIN 
    // registration

    public function adminreg(Request $req)
    {
    }

    // login

    public function adminlogin(Request $req)
    {
        $req->validate([
            'username' => [
                'required',
                new admin_auth_username()
            ],
            'password' => [
                'required',
                new admin_auth_pass()
            ]
        ]);
        $req->session()->put('admin', 'admin@xyz');
        return redirect("index");
    }

    public function adminloggingOut()
    {
        if (Session()->has('admin')) {
            Session()->pull('admin');
            return redirect('index');
        }
    }



    // Display Blog

    public function displayBlog()
    {
        $data = blog::all();
        return view("layouts.blognav", ["display_blog" => $data]);
    }

    public function displayCourses()
    {
        $cdata = course::all();
        return view("layouts.index", ["index" => $cdata]);
    }

    public function displayCoursesPage()
    {
        $cpdata = course::all();
        return view("layouts.courses", ["display_coursespage" => $cpdata]);
    }

    public function displaypProfileNavbar()
    {
        $loggedInUserId = session()->get('user');
        $users = Userinfo::where('username', $loggedInUserId)->get();
        return view("layouts.navbar", ["displaypn" => $users]);
    }


    public function analytics()
    {
        // $todayDate = Carbon::now()->format('d-m-Y');
        // $thatday = Carbon::createFromTimestamp(1641000000);
        // $diffDays = $todayDate->diffInDays($thatday);

        $timestamp = Carbon::createFromTimestamp(1640000000);
        $difference = $timestamp->diffForHumans();
        return view('layouts.coursesdetails', compact('difference'));
    }


    public function usercourse($id)
    {
        $loggedInUserId = session()->get('user');
        $user = Userinfo::where('username', $loggedInUserId)->get();
        $course = Course::find($id);

        if ($course) {
            foreach ($user as $u) {
                $addCourse = new usercourse();
                $addCourse->userid = $u->id;
                $addCourse->courseid = $course->id;
                $addCourse->save();
            }
            return redirect('displayUserCourses');
        } else {
            return redirect('/display_coursespage');
        }
    }

    // public function userCourseData($id)
    // {
    //     $dis = Userinfo::join('branch', 'branch.branch_id', "=", 'employeedetails.branch_id');
    // }
    public function getUsersWithCourses()
    {
        $id = session()->get('userid');
        // $user = Userinfo::where('username', $loggedInUserId)->get();

        $dis = DB::table('usercourses')
            ->join('courses', 'usercourses.courseid', '=', 'courses.id')
            ->select('courses.*', 'usercourses.id as usercourse_id')
            ->where('usercourses.userid', $id)
            ->get();
        return view('user.usercourses', ["displayUserCourses" => $dis]);
    }


    public function displayVideo(string $id)
    {
        $video = course::find($id);
        return view('layouts.showVideo', compact('video'));
    }
    public function searchCourse(Request $request)
    {
        if ($request->input('search')) {
            $searchCourses = course::where('title', 'LIKE', '%' . $request->input('search') . '%')->latest()->paginate(15);
            return view('layouts.search', compact('searchCourses'));
        } else {
            return redirect()->back()->with('message', 'No course found');
            //         $noCoursesMessage = "No courses found.";
            // return view('layouts.search', compact('noCoursesMessage'));
        }
    }
}
