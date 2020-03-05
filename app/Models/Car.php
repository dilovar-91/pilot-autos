<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable =['name','pic'];

    public function complectations()
    {
        return $this->hasMany('App\Models\Complectation');
    }

    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');        
  
    }
}
