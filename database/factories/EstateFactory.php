<?php

namespace Database\Factories;

use App\Models\Estate;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Estate::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'refereance' => $this->faker->uuid,
            'status_id' => $this->faker->numberBetween(1, 10),
            'country_id' => $this->faker->numberBetween(1, 10),
            'address_id' => $this->faker->numberBetween(1, 10),
            'estate_type_id' => $this->faker->numberBetween(1, 10),
            'estate_name' => $this->faker->word,
            'estate_space_size' => $this->faker->randomElement(array('20X30', '20X30', '20X30', '20X30')),
            'propety_document' => $this->faker->file($sourceDir = '/tmp', $targetDir = "/public/estate/"),
            'propety_document_1' => $this->faker->file($sourceDir = '/tmp', $targetDir = "/public/estate/"),
            'propety_document_2' => $this->faker->file($sourceDir = '/tmp', $targetDir = "/public/estate/"),
            'propety_document_3' => $this->faker->file($sourceDir = '/tmp', $targetDir = "/public/estate/"),
            'propety_document_4' => $this->faker->file($sourceDir = '/tmp', $targetDir = "/public/estate/"),
            'propety_document_5' => $this->faker->file($sourceDir = '/tmp', $targetDir = "/public/estate/"),
            'propety_document_6' => $this->faker->file($sourceDir = '/tmp', $targetDir = "/public/estate/"),
            'estate_descriptions' => $this->faker->text
        ];
    }
}
