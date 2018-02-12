<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'id'=>'1',
            'contact_types_id' => '1',
            'person_id' => '1',
            'name'=>'Number',
            'value'=>'069602930'
        ]);

        DB::table('contacts')->insert([
            'id'=>'2',
            'contact_types_id' => '2',
            'person_id' => '1',
            'name'=>'Email',
            'value'=>'stefan.nikocevic@bild-studio.net'
        ]);

        DB::table('contacts')->insert([
            'id'=>'3',
            'contact_types_id' => '1',
            'person_id' => '2',
            'name'=>'Number',
            'value'=>'069622933'
        ]);

        DB::table('contacts')->insert([
            'id'=>'4',
            'contact_types_id' => '2',
            'person_id' => '2',
            'name'=>'Email',
            'value'=>'milan@gmail.com'
        ]);
    }
}

/*$table->increments('id');
$table->integer('contact_types_id')->references('id')->on('contact_types');
$table->integer('person_id')->references('id')->on('persons');
$table->string('name');
$table->string('value');
$table->timestamps();*/
