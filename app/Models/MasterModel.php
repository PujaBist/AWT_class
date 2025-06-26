<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterModel extends Model
{
    public function makes()
    {
        return $this -> hasMany(MasterMake::class);
    }
     public function vehicles()
    {
        return $this -> hasMany(Vehicle::class);

    } 
        
}
