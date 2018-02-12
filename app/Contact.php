<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';

    public function person()
    {
        return $this->belongsTo('App\Person');
    }

    public function contact_type()
    {
        return $this->hasOne('App\Contact_Type');
    }
}

