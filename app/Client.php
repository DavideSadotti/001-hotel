<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = [];

    public function reservations(){

        return $this->hasMany('App\Reservation');
    }

    public function information(){

        return $this->belongsTo('App\Information');
    }
}
