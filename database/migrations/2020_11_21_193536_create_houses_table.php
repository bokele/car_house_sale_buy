<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('address_id');
            $table->unsignedBigInteger('type_id');
            $table->string('estate_space_size');
            $table->string('house_space_size');
            $table->integer('number_of_balconies');
            $table->float('balconies_space_size');
            $table->integer('number_of_bedrooms');
            $table->integer('number_of_bathrooms');
            $table->integer('number_of_garages');
            $table->boolean('pets_allowed')->nullable();
            $table->longText('estate_descriptions');
            $table->string('propety_document');
            $table->string('propety_document_1')->nullable();
            $table->string('propety_document_2')->nullable();
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
        Schema::dropIfExists('houses');
    }
}
