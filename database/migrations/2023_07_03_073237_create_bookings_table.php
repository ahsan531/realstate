<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id('id');
            $table->string('booking_data',50);
            $table->string('PLot_id',50);
            $table->string('plot_charges',50);
            $table->string('extra_chargers_type',50);
            $table->string('extra_charges',50)->nullable();
            $table->string('extra_charges_amount',50);
            $table->string('total_charges',50);
            $table->string('discount_chargers_type',50);
            $table->string('discount_charges',50)->nullable();
            $table->string('discount_charges_amount',50);
            $table->string('net_price_plot',50);

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
        Schema::dropIfExists('bookings');
    }
}
