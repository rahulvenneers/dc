<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emirate extends Model
{
    public function stores()
    {
        return $this->hasMany('App\Stores');
    }
}
