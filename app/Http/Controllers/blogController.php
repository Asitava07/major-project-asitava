<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = new blog; //
        $data = blog::all();
        return view('admin.adminblog', compact('data'));
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
            'title' => 'required|string|min:5',
            'description' => 'required|string|min:5',
            'image' => 'required|image',
        ]);
        $data = new blog;
        $data->title = $request->input("title");
        $data->description = $request->input("description");
        $data->image = $request->input("image");
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/blogs/', $filename);
            $data->image = $filename;
        }
        $data->save();
        return redirect('blog');
    }

    /**
     * Display the specified resource.
     */
    public function show(blog $blog)
    {
        //
        // $showBlog = blog::find($id);
        return view('layouts.blogdetails', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $bdata = blog::find($id);
        return view('admin.updateBlog', compact('bdata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'title' => 'required|string|min:5',
            'description' => 'required|string|min:5',
            'image' => 'required|image',
        ]);
        $bdata = blog::find($id);
        $bdata->title = $request->input("title");
        $bdata->description = $request->input("description");
        $bdata->image = $request->input("image");
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/blogs/', $filename);
            $bdata->image = $filename;
        }
        $bdata->update();
        return redirect('blog')->with('status', 'Blog is deleted successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $deleteData = blog::find($id);
        $deleteData->delete();
        return redirect('blog')->with('status', 'Blog is deleted successfully');
    }
}
