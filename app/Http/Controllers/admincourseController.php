<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\coursecategory;
use App\Models\course;
use App\Models\coursereview;
use Illuminate\Support\Carbon;

class admincourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = coursecategory::all();
        $cdata = course::all();
        return view('admin.admincourses', compact('data', 'cdata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|unique:courses|string',
            'description' => 'required|string',
            'price' => 'required|string',
            'image' => 'required|image',
            'video' => 'required|url',
            'duration' => 'required|string',
            'categoryid' => 'required',
        ]);
        $cdata = new course;
        $cdata->title = $request->title;
        $cdata->description = $request->description;
        $cdata->price = $request->price;
        $cdata->image = $request->image;
        $cdata->video = $request->video;
        $cdata->duration = $request->duration;
        $cdata->categoryid = $request->categoryid;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/courses/', $filename);
            $cdata->image = $filename;
        }
        // if ($request->hasfile('video')) {
        //     $vfile = $request->file('video');
        //     $vextension = $vfile->getClientOriginalExtension();
        //     $vfilename = time() . '.' . $vextension;
        //     $vfile->move('uploads/lesson/', $vfilename);
        //     $cdata->video = $vfilename;
        // }
        $cdata->save();
        return redirect('adminCourse');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $showData = course::find($id);
        $review = coursereview::all();
        return view('layouts.coursesdetails', compact('showData', 'review'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $cdata = course::find($id);
        return view('admin.updateCourse', compact('cdata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'title' => 'unique:courses|string',
            'description' => 'string',
            'price' => 'string',
            'image' => 'image',
            'video' => 'required|url',
            'duration' => 'string',
            'categoryid' => 'required',
        ]);
        $cdata = course::find($id);
        $cdata->title = $request->title;
        $cdata->description = $request->description;
        $cdata->price = $request->price;
        $cdata->image = $request->image;
        $cdata->duration = $request->duration;
        $cdata->categoryid = $request->categoryid;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/courses/', $filename);
            $cdata->image = $filename;
        }
        // if ($request->hasfile('video')) {
        //     $vfile = $request->file('video');
        //     $vextension = $vfile->getClientOriginalExtension();
        //     $vfilename = time() . '.' . $vextension;
        //     $vfile->move('uploads/lesson/', $vfilename);
        //     $cdata->video = $vfilename;
        // }
        $cdata->update();
        return redirect('adminCourse');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $deleteData = course::find($id);
        $deleteData->delete();
        return redirect('adminCourse')->with('status', 'course is deleted successfully');
    }
}
