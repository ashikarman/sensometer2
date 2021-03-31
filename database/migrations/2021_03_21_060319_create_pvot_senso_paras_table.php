<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePvotSensoParasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pvot_senso_paras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sensor_id')->nullable();
            $table->unsignedBigInteger('parameter_id')->nullable();

            $table->foreign('sensor_id')->references('id')
            ->on('sensors')
            ->onDelete('cascade');
            $table->foreign('parameter_id')->references('id')
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
        Schema::dropIfExists('pvot_senso_paras');
    }
}
