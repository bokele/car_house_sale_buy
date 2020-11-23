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
            $table->string("model_code")->nullable();
            $table->string("production_year");
            $table->string("fuel");
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
