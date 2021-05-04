<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booktour extends Model
{
    public function tour()
    {
        return $this->belongsTo('App\Tour');
    }
    public function customers()
    {
        return $this->hasMany('App\Customer');
    }
}
