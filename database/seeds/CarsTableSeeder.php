<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            'id' => '1',
            'car_type_id' => '2',
            'person_id' => '1',
            'brand' => 'Audi',
            'model' => 'A6',
            'car_year' => '2006'
        ]);



        DB::table('cars')->insert([
            'id' => '2',
            'car_type_id' => '1',
            'person_id' => '1',
            'brand' => 'BMW',
            'model' => 'M3',
            'car_year' => '2006'
        ]);
    }
}

/*$table->increments('id');
$table->integer('car_type_id')->references('id')->on('car_types');
$table->integer('person_id')->references('id')->on('persons');
$table->string('car_category');
$table->string('brand');
$table->string('model');
$table->year('car_year');
$table->timestamps();*/
