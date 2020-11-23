<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'model_id' => $this->faker->numberBetween(1, 10),
            'category_id' => $this->faker->numberBetween(1, 10),
            'location_id' => $this->faker->numberBetween(1, 10),
            'model_code' => $this->faker->word,
            'production_year' => $this->faker->year,
            'fuel' => $this->faker->randomElement(array('diseal', 'petrol')),
            'mileage' => $this->faker->numberBetween(999, 1000000),
            'color' => $this->faker->hexColor(),
            'status' => $this->faker->randomElement(array('sold', 'rental', 'remove', 'delete')),
            'description_of_feature' => $this->faker->paragraph(10)
        ];
    }
}
