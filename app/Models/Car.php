<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable =['name','type', 'price', 'price-credit'];

    public function complectations()
    {
        return $this->hasMany('App\Models\Complectation');
    }
}
