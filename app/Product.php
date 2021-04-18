<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
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
}
