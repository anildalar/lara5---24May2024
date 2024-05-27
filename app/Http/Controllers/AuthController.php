<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //




    public function login(Request $request){

        // single line comment
        //dd($request->all()); //dump and die
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('welcome'); //welcome
        }
 
        return back()->withErrors([
            'email' => 'Invalid Credentials',
        ])->onlyInput('email');
    }
}
