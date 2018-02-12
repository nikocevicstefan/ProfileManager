<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $this->call(UsersTableSeeder::class);
       $this->call(PersonsTableSeeder::class);
       $this->call(StudentsTableSeeder::class);
       $this->call(EmployeesTableSeeder::class);
       $this->call(ContactsTableSeeder::class);
       $this->call(CarsTableSeeder::class);
       $this->call(Car_TypesTableSeeder::class);
       $this->call(Contact_TypesTableSeeder::class);
    }
}
