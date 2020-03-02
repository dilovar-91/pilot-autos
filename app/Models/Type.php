<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function complectation()
    {
        return $this->hasMany('App\Models\Complectation');
    }
}
