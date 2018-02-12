<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->increments('id')->onDelete('cascade');;
            $table->string('name', 100);
            $table->string('surname', 100);
            $table->bigInteger('JMBG');
            $table->integer('age');
            $table->enum('gender', ['Male', 'Female']);;
            $table->string('place_of_birth');
            $table->string('country');
            $table->string('city');
            $table->string('address');
            $table->enum('drivers_permit',['Yes','No']);
            $table->enum('has_car',['Yes','No']);
            $table->enum('is_employee',['Yes','No']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persons');
    }
}
