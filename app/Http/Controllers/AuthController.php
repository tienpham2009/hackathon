<?php

namespace App\Http\Controllers;

use App\Http\Repositories\UserRepository;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected UserRepository $authRepo ;

    public function __construct(UserRepository $data)
    {
        $this->authRepo = $data;
    }

    public function showFormLogin(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('login');
    }

    public function checkLogin(Request $request ): \Illuminate\Http\RedirectResponse
    {
        $email = $request->email;
        $password = $request->password;
        $flag = false;
        $users = $this->authRepo->getAll();
        foreach ($users as $user){
            if ($email == $user->email && $password == $user->password){
                session()->flash('login-success' , $user->id);
                $flag = true;
            }
        }

        if ($flag){
            return redirect()->route('home');
        }else{
            $error = "tai khoan hoac mat khau khong dung";
            session()->flash('login-error' , $error);
            return redirect()->route('showFormLogin');
        }
    }

    public function showFormRegistration(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('registration');
    }

    public function registration()
    {

    }
}
