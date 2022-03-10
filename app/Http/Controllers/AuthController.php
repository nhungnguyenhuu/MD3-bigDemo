<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showFormRegister()
    {
        return view('frontend.auth.register');
    }
    public function showFormLogin()
    {
        if(Auth::check()){
            return redirect()->route('backend.user.login');
        }
        return view('frontend.auth.login');
    }

    public function login(Request $request)
    {
        $data = $request->only("email", "password");
        if(Auth::attempt($data)){
            return redirect()->route('backend.user.login');
        }else{
            return redirect()->back();
        }
    }
}
