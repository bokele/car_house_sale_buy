<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Car::factory(10)->create();
        \App\Models\CarCategory::factory(2)->create();
        \App\Models\CarModel::factory(10)->create();
        \App\Models\Carsold::factory(10)->create();
        \App\Models\Country::factory(10)->create();
        \App\Models\CustomerAddress::factory(10)->create();
        \App\Models\Estate::factory(10)->create();
        \App\Models\EstateType::factory(10)->create();
        \App\Models\House::factory(10)->create();
        \App\Models\Insurance::factory(10)->create();
        \App\Models\Invoice::factory(10)->create();
        \App\Models\Location::factory(10)->create();
        \App\Models\Payment::factory(10)->create();
        \App\Models\Order::factory(10)->create();
        \App\Models\Rental::factory(10)->create();
        \App\Models\Reservation::factory(10)->create();
        \App\Models\Status::factory(10)->create();
        \App\Models\Transaction::factory(10)->create();
        \App\Models\TransactionType::factory(10)->create();
    }
}
