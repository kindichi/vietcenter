<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
