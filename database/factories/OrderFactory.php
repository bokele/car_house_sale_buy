<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'carsold_id' => $this->faker->numberBetween(0, 10),
            'house_id' => $this->faker->numberBetween(0, 10),
            'estat_id' => $this->faker->numberBetween(0, 10),
            'status_id' => $this->faker->numberBetween(1, 10),
            'max_price' => $this->faker->randomFloat(20000, 30000),
            'min_price' => $this->faker->randomFloat(200, 20000),
            'propose_price' => $this->faker->randomFloat(2000, 30000),
        ];
    }
}
