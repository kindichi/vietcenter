<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function tour()
    {
        return $this->belongsTo('App\Tour');
    }
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
