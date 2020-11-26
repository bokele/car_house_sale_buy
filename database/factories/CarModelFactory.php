<?php

namespace Database\Factories;

use App\Models\CarModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as FakerCar;

class CarModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CarModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $this->faker->addProvider(new \Faker\Provider\Fakecar($this->faker));
        $v = $this->faker->vehicleArray();

        return [
            'brand' => $v['brand'],
            'model' => $v['model'],
            'vehicle_type' =>  $this->faker->vehicleType,
            'year' => $this->faker->biasedNumberBetween(1998, 2017, 'sqrt')
        ];
    }
}
