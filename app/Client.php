<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = [];

    public function reservations(){

        return $this->hasMany('App\Reservation');
    }

    public function informations(){

        return $this->belongsTo('App\Information');
    }
}
