<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('persons')->insert([
            'id' => '1',
            'name' => 'Stefan',
            'surname' => 'Nikocevic',
            'JMBG' => '4168484',
            'age' => '22',
            'gender' => 'Male',
            'place_of_birth' => 'Bar',
            'country' => 'Crna Gora',
            'city' => 'Bar',
            'address' => 'Makedonska',
            'drivers_permit' => 'Yes',
            'has_car' => 'Yes',
            'is_employee' => 'Yes'
        ]);

        DB::table('persons')->insert([
            'id' => '2',
            'name' => 'Milan',
            'surname' => 'Gvozdenovic',
            'JMBG' => '455894',
            'age' => '22',
            'gender' => 'Male',
            'place_of_birth' => 'Bar',
            'country' => 'Crna Gora',
            'city' => 'Bar',
            'address' => 'Popovici',
            'drivers_permit' => 'No',
            'has_car' => 'No',
            'is_employee' => 'No'
        ]);
    }
}


