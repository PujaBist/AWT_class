<?php

namespace Database\Seeders;

use App\Models\MasterMake;
use Faker\Provider\FakeCar;
use Faker\Factory as FakerFactory;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterMakeSeeder extends Seeder
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
        
     for($i=0; $i<20; $i++)
     {
        MasterMake::firstOrCreate([
            'name' => $faker -> vehicleBrand(),
        ]);
     }

    }
}
