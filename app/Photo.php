<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function tour()
    {
        return $this->belongsTo('App\Tour');
    }
    public function article()
    {
        return $this->belongsTo('App\Article');
    }
}
