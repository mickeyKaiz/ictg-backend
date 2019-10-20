<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    public $timestamps = false;
    public function english()    {
        return $this->belongsTo('App\English');
    }
    public function sinhala()    {
        return $this->belongsTo('App\Sinhala');
    }
    //
}
