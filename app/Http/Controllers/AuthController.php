<?php

namespace App\Http\Controllers;

use App\Models\CustomUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //




    public function login(Request $request){

        // single line comment
        //var_dump($request->all());
        $credentials = $request->only('email', 'password');
        //var_dump($credentials);
        //dd($credentials);
        
        // Select user
        var_dump(md5($credentials['password']));

        $user = CustomUser::where('email', $credentials['email'])
                          ->where('password', md5($credentials['password']))
                          ->first();
        //dd($user->name);
        if ($user) {
            session(['username' => $user->name]);
            //True
            //$_SESSION['username'] = $user->name;
        //Class::method(actualArgument)
            Log::info('User authenticated successfully with email: ' . $credentials['email']);
            $request->session()->regenerate();
            Log::info('Session regenerated. Redirecting to welcome route.');
            return redirect()->intended('welcome');
        } 
 
        return back()->withErrors([
            'email' => 'Invalid Credentials',
        ])->onlyInput('email');
    }
}
