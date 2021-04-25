<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function tour()
    {
        return $this->belongsTo('App\Tour');
    }
}
