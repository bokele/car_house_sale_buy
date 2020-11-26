<?php

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'status' => $this->faker->numberBetween(1, 10),
            'own_id' => $this->faker->numberBetween(1, 10),
            'ref' => $this->faker->uuid,
            'bank' => $this->faker->company,
            'code' => $this->faker->uuid,
            'amount' => $this->faker->numberBetween(10000, 1000000),
        ];
    }
}
