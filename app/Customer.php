<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function tour()
    {
        return $this->belongsTo('App\Tour');
    }
    public function booktour()
    {
        return $this->belongsTo('App\Booktour');
    }
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
