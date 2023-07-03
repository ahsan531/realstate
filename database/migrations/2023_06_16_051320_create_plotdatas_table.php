<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlotdatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plotdatas', function (Blueprint $table) {
            $table->id('id');
            $table->string('block',10);
            $table->string('size_in_yard',100)->nullable();
            $table->string('dimension',100)->nullable();
            $table->string('sector',100)->nullable();
            $table->string('plot_no',100);
            $table->string('size_in_marla_kanal',100)->nullable();
            $table->string('facing',100)->nullable();
            $table->string('type',100);
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
        Schema::dropIfExists('plotdatas');
    }
}
