<?php

namespace Database\Factories;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Invoice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ref_number' => $this->faker->uuid,
            'payment_id' => $this->faker->numberBetween(1, 10),
            'owrn_id' => $this->faker->numberBetween(1, 10),
            'client_id' => $this->faker->numberBetween(1, 10),
            'vat' => $this->faker->randomElement(array(18, 20, 16)),
            'total_amount_payable' => $this->faker->randomFloat(200, 30000),
            'discount_amount' => $this->faker->randomFloat(0, 1000),
            'net_amount_payable' => $this->faker->randomFloat(200, 30000),
            'platform_amount' => $this->faker->randomFloat(200, 300),
            'total_amount_pay' => $this->faker->randomFloat(200, 30000),
            'invoice_for' => $this->faker->randomElement(array('sold car', 'sold house', 'sold estate', 'rental house', 'rental car'))
        ];
    }
}
