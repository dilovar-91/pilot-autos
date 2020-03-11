<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $table = 'models';
    protected $fillable = ['name', 'pic', 'url'];

    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');        
  
    }
}
