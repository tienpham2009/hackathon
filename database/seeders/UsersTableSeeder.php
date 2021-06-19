<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Concerns\HasAttributes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Nguyen Duc Tam',
                'name_ingame' => 'BoyHaNoi',
                'birth_date' => '1991/11/15',
                'email' => 'ngductam91@gmail.com',
                'password' => Hash::make('123456'),
                'gender' => 'Male'
            ],
            [
                'name' => 'Ngo Quoc Thinh',
                'name_ingame' => 'BoyPro',
                'birth_date' => '2000/05/15',
                'email' => 'thinh123@gmail.com',
                'password' => Hash::make('123456'),
                'gender' => 'Male'
            ],
            [
                'name' => 'Nguyen Van Hai',
                'name_ingame' => 'BoyCSS',
                'birth_date' => '1998/04/25',
                'email' => 'vanhai123@gmail.com',
                'password' => Hash::make('123456'),
                'gender' => 'Male'
            ],
            ['name' => 'Nguyen Minh Tien',
                'name_ingame' => 'BoyLeader',
                'birth_date' => '1997/03/08',
                'email' => 'minhtien123@gmail.com',
                'password' => Hash::make('123456'),
                'gender' => 'Male'
            ],
            [
                'name' => 'Cuong Coi Coc',
                'name_ingame' => 'BoyCuong',
                'birth_date' => '1995/10/25',
                'email' => 'cuong123@gmail.com',
                'password' => Hash::make('123456'),
                'gender' => 'Male'
            ],
        ]);
    }
}
