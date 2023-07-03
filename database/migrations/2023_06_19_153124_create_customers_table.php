<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id('id');
            $table->string('membership_no',30);
            $table->string('husband_father_name', 30);
            $table->string('cnic_expire', 40)->nullable();
            $table->string('landline_no', 30)->nullable();
            $table->string('local_address', 255);
            $table->string('email', 30);
            $table->string('name', 30);
            $table->string('cnic', 30);
            $table->string('ntn', 30)->nullable();
            $table->string('mobile_no', 30)->nullable();
            $table->string('permanent_address',255)->nullable();
            $table->string('customer_img',50)->nullable();
            $table->string('customer_cnic_front',50)->nullable();
            $table->string('customer_cnic_back',50)->nullable();
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
        Schema::dropIfExists('customers');
    }
}
