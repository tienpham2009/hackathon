<?php


namespace App\Http\Repositories;


use App\Models\User;
use Illuminate\Support\Collection;

class UserRepository
{
    protected User $userModel;

    public function __construct(User $user)
    {
        $this->userModel = $user;
    }

    public function getAll(): Collection|array
    {
       return $this->userModel->all();
    }

}
