<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'person_id' => '1',
            'company_name' => 'Bild-Studio',
            'work_field' => 'Web-Dev',
            'position' => 'Intern',
            'work_years' => '0'
        ]);
    }
}
