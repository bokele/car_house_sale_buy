<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('carsold_id')->nullable();
            $table->unsignedBigInteger('house_id')->nullable();
            $table->unsignedBigInteger('estat_id')->nullable();
            $table->unsignedBigInteger('status_id')->nullable();
            $table->double('max_price');
            $table->double('min_price');
            $table->double('propose_price');
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
        Schema::dropIfExists('orders');
    }
}
