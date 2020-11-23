<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('ref_number');
            $table->unsignedBigInteger('customer_id');
            $table->string('currency')->nullable();
            $table->double('toatl_amount_paid');
            $table->double('amount');
            $table->double('platform_share_total')->default(0);
            $table->boolean('confirm')->default(false);
            $table->string('method')->nullable();
            $table->string('type')->nullable(); // car_sold, car_rental, home_sold, proprty_sold
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
        Schema::dropIfExists('payments');
    }
}
