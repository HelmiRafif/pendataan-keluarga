<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use app\Models\User;

class UserSeederV3 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->insert([
            ['name' => 'BlokMasjid1', 'password' =>  bcrypt('12345') ],
            ['name' => 'BlokMasjid2', 'password' =>  bcrypt('12345') ],
            ['name' => 'BlokMasjid3', 'password' =>  bcrypt('12345') ],
            ['name' => 'BlokMasjid4', 'password' =>  bcrypt('12345') ],
            ['name' => 'BlokMasjid5', 'password' =>  bcrypt('12345') ],
            ['name' => 'Kav1', 'password' =>  bcrypt('12345') ],
            ['name' => 'Kav2', 'password' =>  bcrypt('12345') ],
            ['name' => 'Kav3', 'password' =>  bcrypt('12345') ],
            ['name' => 'Kav4', 'password' =>  bcrypt('12345') ],
            ['name' => 'Kav5', 'password' =>  bcrypt('12345') ],
        ]);
    }
}