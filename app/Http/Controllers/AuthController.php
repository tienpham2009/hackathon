<?php

namespace App\Http\Controllers;

use App\Http\Repositories\GameRepository;
use App\Http\Repositories\UserRepository;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    protected $authRepo ;

    public function __construct( UserRepository $data)
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
            $error = "tai khoan hoac matkhau khong dung";
            session()->flash('login-error' , $error);
            return redirect()->route('showFormLogin');
        }
    }

    public function showFormRegistration(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $gameModel = new GameRepository();
        $games = $gameModel->getAll();
        return view('registration' , compact('games'));
    }

    public function registration(Request $request)
    {
        $user = new User();
        $user->fill($request->all());
        $file = $request->image;

        if (!$request->hasFile('image')){
            $user->image = $file;;
        }else{
            $request->file('image')->storeAs('public/images' , $file );
            $user->image = $file;
        }
        $user->save();
        $this->authRepo->registration($user);

        $message = "dang ki thanh cong !";
        session()->flash('registration_success', $message);
        return redirect()->route('showFormLogin');
    }
}
