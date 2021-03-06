<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complectation extends Model
{
    protected $fillable =['title','type', 'car_id'];
    public function car()
    {
        return $this->belongsTo('App\Models\Car');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\Type');        
  
    }

    
}
