<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class GameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            [
                'name' => 'League of Legends'
            ],
            [
                'name' => "PlayerUnknown's Battlegrounds"
            ],
            [
                'name' => 'Overwatch'
            ],
            [
                'name' => 'Among Us'
            ],
            [
                'name' => 'Counter-Strike: Global Offensive'
            ]
        ]);
    }
}
