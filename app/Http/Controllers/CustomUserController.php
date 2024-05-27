<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Hash;
use App\Models\CustomUser;
use Illuminate\Http\Request;

class CustomUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //We have to do ServerSide validation
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required|confirmed|min:8',
            'password_confirmation'=>'required:min:8'
        ]);

        //dd($request->all()); // Dump and Die

        //SO now my data is valid
        //I want to store into db and

        //1. Query
        //2. Eleqouent
        //$data is a normal variable
        $data = $request->all(); // Associativity of operator equal
        var_dump($data["password"]);
                        //Class::method)
                        //:: Scope Resolution operator
        $data['password'] = Hash::make($data['password']);
        
        //dd($data);

        CustomUser::create($data);
        //Dump all the incomming data
        //
        //THis will be a session variable 
        return redirect("/register")->withSuccess('User Registered successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomUser $customUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CustomUser $customUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CustomUser $customUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomUser $customUser)
    {
        //
    }
}
