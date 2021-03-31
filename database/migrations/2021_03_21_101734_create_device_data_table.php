<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('device_id')->nullable();

            $table->foreign('device_id')->references('id')
            ->on('devices')
            ->onDelete('cascade');
            
            $table->string('slave_address')->nullable();
            $table->string('parameter_id')->nullable();
            $table->string('value')->nullable();
            $table->string('device_timestamps')->nullable();
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
        Schema::dropIfExists('device_data');
    }
}
