<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $guarded = [];

    public function information(){

        return $this->belongsTo('App\Information');
    }

    public function reservations(){

        return $this->belongsToMany('App\Reservation');
    }
}
