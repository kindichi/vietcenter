<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function booktours()
    {
        return $this->hasMany('App\Booktour');
    }
    public function photos()
    {
        return $this->hasMany('App\Photo');
    }
    public function schedules()
    {
        return $this->hasMany('App\Schedule');
    }
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
