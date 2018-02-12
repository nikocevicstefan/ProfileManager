<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Contact_TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_types')->insert([
            'id' => '1',
            'type' => 'Number'
        ]);

        DB::table('contact_types')->insert([
            'id' => '2',
            'type' => 'Email'
        ]);

        DB::table('contact_types')->insert([
            'id' => '3',
            'type' => 'Skype'
        ]);

        DB::table('contact_types')->insert([
            'id' => '4',
            'type' => 'Facebook'
        ]);
    }
}
