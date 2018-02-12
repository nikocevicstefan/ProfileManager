<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact_Type extends Model
{
    protected $table = 'contact_types';

   public function contact()
   {
       return $this->belongsTo('App\Contact');
   }

}
