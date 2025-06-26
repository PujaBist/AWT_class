<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterMake extends Model
{
    use HasFactory;
    public function models()
    {
        return $this -> hasMany(MasterModel::class);
    }
    public function vehicles()
    {
        return $this -> hasMany(Vehicle::class);

    } 
        
    
}
