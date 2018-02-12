<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persons';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function car()
    {
        return $this->hasMany('App\Car');
    }

    public function contact()
    {
        return $this->hasMany('App\Contact');
    }

    public function student()
    {
        return $this->hasOne('App\Student');
    }

    public function employee()
    {
        return $this->hasOne('App\Employee');
    }

}


