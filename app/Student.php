<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function courses(){
     return  $this->belongsTo('App\Course');
    }
    public function feepayments(){
        return $this->hasMany('App\Feepayment');

    }
}


