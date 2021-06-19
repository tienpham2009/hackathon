<?php


namespace App\Http\Repositories;


use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserRepository
{
    public function getAll(): \Illuminate\Support\Collection
    {
        return DB::table('users')->get();
    }


    public function getById($id)
    {
        return $this->userModel->findOrFail($id);
    }

}
