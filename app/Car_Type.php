<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car_Type extends Model
{
    protected $table = 'car_types';

   public function car()
   {
       return $this->belongsTo('App\Car');
   }
}
