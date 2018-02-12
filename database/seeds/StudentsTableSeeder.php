<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([

            'person_id' => '2',
            'index' => '24/14',
            'study_programme' => 'SPR',
            'study_year' => '4',
            'avg_grade' => '9.5'
        ]);
    }
}

