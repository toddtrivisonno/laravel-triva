<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kudos extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function activities() {
        return $this->belongsTo('App\Activities');
    }
}
