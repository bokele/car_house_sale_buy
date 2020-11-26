<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsoldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carsolds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("car_id");
            $table->double("max_price");
            $table->double("min_price");
            $table->string('white_book');
            $table->string('tax_clearancy')->nullable();
            $table->string('last_insurancy')->nullable();
            $table->string('image_0')->nullable();
            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
            $table->string('image_4')->nullable();
            $table->string('image_5')->nullable();
            $table->string('image_6')->nullable();
            $table->string('image_7')->nullable();
            $table->string('image_8')->nullable();
            $table->string('image_9')->nullable();
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
        Schema::dropIfExists('carsolds');
    }
}
