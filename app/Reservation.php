<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = [];

    public function room(){

        return $this->belongsTo('App\Room');
    }

    public function client(){

        return $this->belongsTo('App\Cliet');
    }

    public function guests(){

        return $this->belongsToMany('App\Guest');
    }
}
