<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    public function person()
    {
        return $this->belongsTo('App\Person');
    }
}
