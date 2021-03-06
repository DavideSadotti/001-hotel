<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = [];

    public function rooms(){
        
        return $this->belongsToMany('App\Room');
    }
}
