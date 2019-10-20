<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class English extends Model {
    public $timestamps = false;
    public function relations() {
        return $this->hasMany('App\Relation');
    }
}
