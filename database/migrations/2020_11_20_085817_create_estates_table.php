<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estates', function (Blueprint $table) {
            $table->id();
            $table->string('refereance');

            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('address_id');
            $table->unsignedBigInteger('estate_type_id');
            $table->string('estate_name');
            $table->float('estate_space_size');
            $table->string('propety_document');
            $table->string('propety_document_1')->nullable();
            $table->string('propety_document_2')->nullable();
            $table->string('propety_document_3')->nullable();
            $table->string('propety_document_4')->nullable();
            $table->string('propety_document_5')->nullable();
            $table->string('propety_document_6')->nullable();
            $table->longText('estate_descriptions');

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
        Schema::dropIfExists('estates');
    }
}
