<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("model_id");
            $table->unsignedBigInteger("category_id");
            $table->unsignedBigInteger("location_id");
            $table->string("vehicle_fuel_type");
            $table->string("vehicle_seat_count");
            $table->string("vehicle_gear_box_type");
            $table->string("vehicle_door_count");
            $table->string("vehicle_registration");
            $table->string("Vehicle_identification_number");
            $table->string("mileage");
            $table->string("color");
            $table->string("status");
            $table->longText("description_of_feature");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
