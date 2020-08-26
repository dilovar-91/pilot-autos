<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarPrice extends Model
{
    protected $fillable =['mark','model'];
    public function complectations()
    {
        return $this->hasMany('App\Models\Complectation');
    }

    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');        
  
    }
    public function model()
    {
        return $this->belongsTo('App\Models\CarModel');        
  
    }
}
