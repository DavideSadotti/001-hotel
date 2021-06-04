<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $guarded = [];

    public function client(){

        return $this->belongsTo('App\Client');
    }

    public function guest(){

        return $this->belongsTo('App\Guest');
    }
}
