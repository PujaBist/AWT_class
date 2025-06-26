<?php

namespace Database\Factories;
use App\Models\MasterMake;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;
use Faker\Provider\FakeCar;
use Pelmered\FakeCar\FakeCarProvider;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MasterMAke>
 */
class MasterMAkeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        /**
         * @var \Faker\Generator|\Faker\Provider\FakeCar $faker */
         
        $faker=FakerFactory::create();
        $faker->addProvider(new FakeCar($faker));
        return [
            'name'=> $faker->unique()->vehicleBrand(),
        ];
    }
}
