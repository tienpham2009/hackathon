<?php

namespace App\Http\Repositories;

use Illuminate\Support\Facades\DB;

class GameRepository
{
    protected $gameModel;

    public function getAll()
    {
        return DB::table('games')->get();
    }
}
