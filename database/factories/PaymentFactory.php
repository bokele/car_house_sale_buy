<?php

namespace Database\Factories;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Payment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ref_number' => $this->faker->uuid,
            'customer_id' => $this->faker->numberBetween(1, 10),
            'currency' => $this->faker->randomElement(array('fcog', 'mwz', 'usd', 'euro')),
            'toatl_amount_paid' => $this->faker->randomFloat(200, 30000),
            'amount' => $this->faker->randomFloat(200, 30000),
            'platform_share_total' => $this->faker->randomFloat(200, 300),
            'confirm' => $this->faker->randomElement(array(false, true)),
            'method' => $this->faker->randomElement(array('mobile', 'credit', 'transfert', 'euro')),
            'type' => $this->faker->randomElement(array('sold car', 'sold house', 'sold estate', 'rental house', 'rental car'))
        ];
    }
}
