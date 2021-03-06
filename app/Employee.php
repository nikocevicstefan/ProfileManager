<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';

    public function person()
    {
        return $this->belongsTo('App\Person');
    }
}
