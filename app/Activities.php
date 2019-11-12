<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function kudos() {
        return $this->hasMany('App\Kudos');
    }
}
