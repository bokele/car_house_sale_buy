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
            $table->string("type"); // sold or rent
            $table->string('propety_document');
            $table->string('propety_insurance')->nullable();
            $table->string('propety_carte_rose')->nullable();
            $table->string('propety_document_3')->nullable();
            $table->string('propety_document_4')->nullable();
            $table->string('propety_document_5')->nullable();
            $table->string('propety_document_6')->nullable();
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
