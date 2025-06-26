<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    //
    public function make()
    {
        return $this->belongsTo(MasterMake::class);
    }

    // A Vehicle belongs to one model
    public function model()
    {
        return $this->belongsTo(MasterModel::class);
}
}

