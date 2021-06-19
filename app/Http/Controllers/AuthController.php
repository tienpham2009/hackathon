<?php

namespace App\Http\Controllers;

use App\Http\Repositories\UserRepository;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected $authRepo ;

    public function __construct( UserRepository $data)
    {
        $this->authRepo = $data;
    }

    public function showFormLogin()
    {
        return view('login');
    }

    public function checkLogin(Request $request )
    {
        $email = $request->email;
        $password = $request->password;
        $flag = false;
        $users = $this->authRepo->getAll();
        foreach ($users as $user){
            if ($email == $user->email && $password == $user->password){
                $flag = true;
            }
        }

        if ($flag){
            return redirect()->route('home');
        }else{
            $error = "tai khoan hoac matkhau khong dung";
            session()->flash('login-error' , $error);
            return view('login');
        }
    }
}
