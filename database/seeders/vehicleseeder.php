<?php

namespace Database\Seeders;

use App\Models\MasterMake;
use App\Models\Vehicle;
use App\Models\vehicles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class vehicleseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $makes=MasterMake::all();
        for($i=0; $i<20; $i++){
            $make=$makes->random();
            $models=$make->models()->get();
            if ($models->count()>0){
                $model=$models->random();
            Vehicle::create([
                'master_make_id'=> $make->id,
                'master_model_id'=>$model->id,
                'registration_no'=>fake()->numberBetween(1000000,999999999),
            ]);
        }
    }
    }
}
