<?php

namespace Database\Factories;

use App\Models\House;
use Illuminate\Database\Eloquent\Factories\Factory;

class HouseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = House::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'reference' => $this->faker->uuid,
            'status_id' => $this->faker->numberBetween(1, 10),
            'country_id' => $this->faker->numberBetween(1, 10),
            'address_id' => $this->faker->numberBetween(1, 10),
            'type_id' => $this->faker->numberBetween(1, 10),
            'estate_space_size' => $this->faker->randomElement(array('20x30', '20x30', '20x30', '20x30')),
            'house_space_size' => $this->faker->randomElement(array('15x20', '15x20', '15x20', '15x20')),
            'number_of_balconies' => $this->faker->numberBetween(1, 10),
            'balconies_space_size' => $this->faker->numberBetween(1, 10),
            'number_of_bedrooms' => $this->faker->numberBetween(1, 10),
            'number_of_bathrooms' => $this->faker->numberBetween(1, 10),
            'number_of_garages' => $this->faker->numberBetween(1, 10),
            'pets_allowed' => $this->faker->randomElement(array(true, false)),

            'estate_descriptions' => $this->faker->text,
            'propety_document' => $this->faker->file($sourceDir =  public_path('/tmp'), $targetDir =  public_path('house/')),
            'propety_document_1' => $this->faker->file($sourceDir =  public_path('/tmp'), $targetDir =  public_path('house/')),
            'propety_document_2' => $this->faker->file($sourceDir =  public_path('/tmp'), $targetDir =  public_path('house/')),
            'propety_document_3' => $this->faker->file($sourceDir =  public_path('/tmp'), $targetDir =  public_path('house/')),
            'propety_document_4' => $this->faker->file($sourceDir =  public_path('/tmp'), $targetDir =  public_path('house/')),
            'propety_document_5' => $this->faker->file($sourceDir =  public_path('/tmp'), $targetDir =  public_path('house/')),
            'propety_document_6' => $this->faker->file($sourceDir =  public_path('/tmp'), $targetDir =  public_path('house/')),
        ];
    }
}
