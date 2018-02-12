<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name' => 'Stefan',
            'email' => 'stefan@gmail.com',
            'password' => bcrypt('stefan'),
            'admin'=> 1
        ]);

        DB::table('users')->insert([
            'name' => 'moderator',
            'email' => 'moderator@gmail.com',
            'password' => bcrypt('moderator'),
            'admin'=> 0
        ]);
    }
}
