<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'cars';

    public function person()
    {
        return $this->belongsTo('App\Person');
    }

    public function car_type()
    {
        return $this->hasOne('App\Car_Type');
    }
}


