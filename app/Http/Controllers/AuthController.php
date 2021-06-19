<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected $userRepo ;

    public function showFormLogin()
    {
        return view('login');
    }

    public function checkLogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

    }
}
