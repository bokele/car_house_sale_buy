<?php

namespace Database\Factories;

use App\Models\CarSold;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarSoldFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CarSold::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {


        return [
            'car_id' => $this->faker->numberBetween(1, 10),
            'max_price' => $this->faker->numberBetween(100000, 10000000),
            'min_price' => $this->faker->numberBetween(1000, 100000),
            'white_book' => $this->faker->file($sourceDir =  public_path('tmp/'), $targetDir = public_path('car/')),
            'tax_clearancy' => $this->faker->file($sourceDir =  public_path('tmp/'), $targetDir = public_path('car/')),
            'last_insurancy' => $this->faker->file($sourceDir =  public_path('tmp/'), $targetDir = public_path('car/')),

            'image_0'  => $this->faker->image($dir =  public_path('car/images/'), $width = 640, $height = 480),
            'image_1' => $this->faker->image($dir =  public_path('car/images/'), $width = 640, $height = 480),
            'image_2' => $this->faker->image($dir =  public_path('car/images/'), $width = 640, $height = 480),
            'image_3' => $this->faker->image($dir =  public_path('car/images/'), $width = 640, $height = 480),
            'image_4' => $this->faker->image($dir =  public_path('car/images/'), $width = 640, $height = 480),
            'image_5' => $this->faker->image($dir =  public_path('car/images/'), $width = 640, $height = 480),
            'image_6' => $this->faker->image($dir =  public_path('car/images/'), $width = 640, $height = 480),
            'image_6' => $this->faker->image($dir =  public_path('car/images/'), $width = 640, $height = 480),
            'image_7' => $this->faker->image($dir =  public_path('car/images/'), $width = 640, $height = 480),
            'image_8' => $this->faker->image($dir =  public_path('car/images/'), $width = 640, $height = 480),
            'image_9' => $this->faker->image($dir =  public_path('car/images/'), $width = 640, $height = 480),
        ];
    }
}
