<?php

namespace Database\Factories;

use App\Models\Insurance;
use Illuminate\Database\Eloquent\Factories\Factory;

class InsuranceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Insurance::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'type_insurance' => $this->faker->randomElement(array('simple', 'double', 'triple')),
            'started_date' => $this->faker->date,
            'ending_date' => $this->faker->date,
            'cost' => $this->faker->numberBetween(1000, 300000),
            'description' => $this->faker->text,
            'copy_insurance' => $this->faker->file($sourceDir = '/tmp', $targetDir = "/public/insurance/")
        ];
    }
}
