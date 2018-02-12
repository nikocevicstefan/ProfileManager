<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Car_TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_types')->insert([
            'id'=>'1',
            'type'=>'Sedan'
        ]);

        DB::table('car_types')->insert([
            'id'=>'2',
            'type'=>'Station-wagon'
        ]);
        DB::table('car_types')->insert([
            'id'=>'3',
            'type'=>'Limousine'
        ]);
        DB::table('car_types')->insert([
            'id'=>'4',
            'type'=>'Hatchback'
        ]);
        DB::table('car_types')->insert([
            'id'=>'5',
            'type'=>'SUV'
        ]);
        DB::table('car_types')->insert([
            'id'=>'6    ',
            'type'=>'Transport'
        ]);
    }
}
