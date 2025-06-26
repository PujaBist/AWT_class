<?php

namespace Database\Seeders;
use App\Models\MasterMake;
use App\Models\MasterModel;
use Faker\Provider\FakeCar;
use Faker\Factory as FakerFactory;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         /**
         * @var \Faker\Generator|\Faker\Provider\FakeCar $faker */
         
        $faker=FakerFactory::create();
        $faker->addProvider(new FakeCar($faker));

        $makes=MasterMake::all();
        for($i=0; $i<20; $i++){
            $make=$makes->random();
            MasterModel::firstOrCreate([
                'name'=>$faker->vehicleModel($make->name),
                'master_make_id' => $make->id,
            ]);

        }
    }
}
