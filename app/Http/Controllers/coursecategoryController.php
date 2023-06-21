<?php

namespace App\Http\Controllers;

use App\Models\coursecategory;
use Illuminate\Http\Request;


class coursecategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = coursecategory::all();
        return view('admin.admincoursecategory', compact('data'));
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
            'categoryid' => 'required|unique:coursecategories|string',
            'categoryname' => 'required|string|unique:coursecategories',
        ]);
        $data = new coursecategory;
        $data->categoryid = $request->categoryid;
        $data->categoryname = $request->categoryname;
        $data->save();
        return redirect('category');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = coursecategory::find($id);
        return view('admin.updateCategory', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'categoryid' => 'required|unique:coursecategories|string',
            'categoryname' => 'required|string|unique:coursecategories',
        ]);
        $updata = coursecategory::find($id);
        $updata->categoryid = $request->input('categoryid');
        $updata->categoryname = $request->input('categoryname');
        $updata->update();
        return redirect('category')->with('status', 'course is deleted successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $deleteData = coursecategory::find($id);
        $deleteData->delete();
        return redirect('category')->with('status', 'course is deleted successfully');
    }
}
