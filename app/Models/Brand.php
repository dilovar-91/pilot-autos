<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function cars()
    {
        return $this->hasMany('App\Models\Car');
    }

    public function models()
    {
        return $this->hasMany('App\Models\CarModel');
    }
}
