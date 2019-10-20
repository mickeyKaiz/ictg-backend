<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sinhala extends Model
{
    public $timestamps = false;
    public function relations() {
        return $this->hasMany('App\Relation');
    }
    //
}
