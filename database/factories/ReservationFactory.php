<?php

namespace Database\Factories;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reservation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pick_up_location_id' => $this->faker->numberBetween(1, 10),
            'drop_off_location_id' => $this->faker->numberBetween(1, 10),
            'customer_id' => $this->faker->numberBetween(1, 10),
            'car_id' => $this->faker->numberBetween(1, 10),
            'start_date' => $this->faker->date()
        ];
    }
}
