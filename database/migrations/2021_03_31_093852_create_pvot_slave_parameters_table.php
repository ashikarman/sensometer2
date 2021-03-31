<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePvotSlaveParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pvot_slave_parameters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('slave_range_id')->nullable();
            $table->unsignedBigInteger('parameter_list_id')->nullable();

            $table->foreign('slave_range_id')->references('id')
            ->on('slave_ranges')
            ->onDelete('cascade');
            $table->foreign('parameter_list_id')->references('id')
            ->on('parameter_lists')
            ->onDelete('cascade');
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
        Schema::dropIfExists('pvot_slave_parameters');
    }
}
