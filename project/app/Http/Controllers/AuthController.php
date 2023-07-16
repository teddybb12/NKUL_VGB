<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function login(Request $request)
    {

        if(isset(Auth::User()->id)) {
            return redirect()->route('home');
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::user()->role_id == 1){
                return redirect()->route('home');
            }
             elseif (Auth::user()->role_id == 2){
                return redirect()->route('home2');
            }
             else {
                return view('login');
            }
        }
        return view('login');
    }

    function logout()
    {
        Auth::logout();
        return view('login');
    }
}
