<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signupPage()
    {
        return view('auth.signup');
    }

    public function login()
    {
        return view('auth.login');
    }
}
