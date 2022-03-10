<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;

    }

    public function showFormRegister()
    {
        return view('frontend.auth.register');
    }

    public function register(AuthRequest $request)
    {
        $data = $request->only("name", "password", "confirm_password");
        $data["role_id"] ='2';
        $data["password"]= Hash::make($data["password"]);
        DB::table('users')->insert($data);
        return redirect()->route('frontend.auth.login');
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
        if($this->userService->login($request)){
            return redirect()->route('backend.user.login');
        }else{
            return redirect()->back();
        }
    }
}
