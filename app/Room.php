<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $guarded = [];

    public function services(){

        return $this->belongsToMany('App\Service');
    }

    public function reservations(){

        return $this->hasMany('App\Reservation');
    }
}
