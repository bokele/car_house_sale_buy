<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as FakerCar;

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


        $this->faker->addProvider(new \Faker\Provider\Fakecar($this->faker));
        return [
            'model_id' => $this->faker->numberBetween(1, 10),
            'category_id' => $this->faker->numberBetween(1, 1),
            'location_id' => $this->faker->numberBetween(1, 10),
            'mileage' => $this->faker->numberBetween(999, 1000000),
            'vehicle_fuel_type' => $this->faker->vehicleFuelType,
            'vehicle_seat_count' => $this->faker->vehicleSeatCount,
            'vehicle_gear_box_type' => $this->faker->vehicleGearBoxType,
            'vehicle_door_count' => $this->faker->vehicleDoorCount,
            'vehicle_registration' => $this->faker->vehicleRegistration('[A-Z]{2}-[0-9]{5}'),
            'Vehicle_identification_number' => $this->faker->vin,
            'color' => $this->faker->hexColor(),
            'status' => $this->faker->randomElement(array('sold', 'rental', 'remove', 'delete')),
            'description_of_feature' => $this->faker->paragraph(10)
        ];
    }
}
