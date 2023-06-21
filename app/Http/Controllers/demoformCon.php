<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\demofromModel;

class demoformCon extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $info = demofromModel::all();
        return view('admin.demoform', compact('info'));
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
            'username' => 'required|unique:demofrom_models|string|min:3|max:255',
            'email' => 'required|email|unique:demofrom_models',
            'password' => 'required_with::confirmPassword|same:confirmPassword|min:5|max:8',
            'firstname' => 'string|min:1|max:255',
            'lastname' => 'string|min:1|max:255',
            'phoneno' => 'unique:demofrom_models|string|min:10|max:10',
            'DOB' => 'unique:demofrom_models|date',
        ]);

        $info = new demofromModel();
        $info->firstname = $request->firstname;
        $info->lastname = $request->lastname;
        $info->email = $request->email;
        $info->username = $request->username;
        $info->password = $request->password;
        $info->phoneno = $request->phoneno;
        $info->DOB = $request->DOB;
        $info->save();
        return redirect('demoform');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //  
        $info = demofromModel::find($id);
        return view('admin.demoform', ['info' => $info]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
