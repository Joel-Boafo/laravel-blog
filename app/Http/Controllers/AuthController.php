<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function home()
    {
        return view('welcome');
    }
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function loginPost(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            return redirect()->route('home')->with('status', 'Logged in successfully');
        }

        return redirect()->route('users.login')->with('error', 'Invalid credentials, please try again');
    }

    public function regitserPost(RegisterRequest $request)
    {
        $credentials = $request->validated();
    }
}
