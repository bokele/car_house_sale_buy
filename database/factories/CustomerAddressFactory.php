<?php

namespace Database\Factories;

use App\Models\CustomerAddress;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerAddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CustomerAddress::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'street_name' => $this->faker->streetName,
            'street_number' => $this->faker->streetAddress,
            'home_number' => $this->faker->numberBetween(1, 100),
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'post_code' => $this->faker->postcode,
            'country_id' => $this->faker->numberBetween(1, 10),
            'full_address' => $this->faker->address
        ];
    }
}
