<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $guarded = [];

    public function clients(){

        return $this->belongsTo('App\Client');
    }

    public function guests(){

        return $this->belongsTo('App\Guest');
    }
}
