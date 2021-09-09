<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            [
                'name' => 'Lalaing',
                'firstname' => 'Charles',
                'age' => 42,
                'adress' => '78, rue Victor Allard',
                'role_id' => 1,
                'email' => 'Charles@gmail.com',
                'password' => bcrypt('Azerty420'),
            ],
        ]);
    }
}
