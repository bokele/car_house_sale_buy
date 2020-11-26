<?php

namespace Database\Factories;

use App\Models\Rental;
use Illuminate\Database\Eloquent\Factories\Factory;

class RentalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rental::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_id' => $this->faker->numberBetween(1, 10),
            'car_id' => $this->faker->numberBetween(1, 10),
            'pick_up_location_id' => $this->faker->numberBetween(1, 10),
            'drop_of_location_id' => $this->faker->numberBetween(1, 10),
            'fuel_litter' => $this->faker->numberBetween(1, 100),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'remarque' => $this->faker->text(500)
        ];
    }
}
