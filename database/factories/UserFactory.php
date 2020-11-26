<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'user_type' => $this->faker->randomElement(array('saler', 'user', 'admin', 'saler_user')),
            'id_type' => $this->faker->numberBetween(1, 5),
            'id_number' => $this->faker->uuid,
            'mobile_number' => $this->faker->phoneNumber,
            'mobile_number_verified_at' => now(),
            'address_id' => $this->faker->numberBetween(1, 10),
            "profile_photo_path" => $this->faker->image($dir = public_path('profile/'), $width = 640, $height = 480),

        ];
    }
}
