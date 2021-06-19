<?php


namespace App\Http\Repositories;


use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserRepository
{
    protected User $userModel;

    public function __construct(User $user)
    {
        $this->userModel = $user;
    }

    public function getAll(): \Illuminate\Support\Collection
    {
        return DB::table('users')->get();
    }


    public function getById($id)
    {
        return $this->userModel->findOrFail($id);
    }

    public function registration($user)
    {
        dd($user);
        $user->save();
    }

}
