<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //26faltu|1001|cms|1-2-3-4|Banani|Gulistan|faisal.com|sakil.com|8088|1068|AqualinkBD||0|1|0|yes|faisal|lafizBro|fahim|10|2|aq_ltd1|aq_ltd_1|aq_ltd_2|aq_ltd_2
        Schema::create('device_configs', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('device_id');
            $table->string('device_type');
            $table->string('slave_id')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('base_url')->nullable();
            $table->string('sub_url')->nullable();
            $table->string('device_db_id')->nullable();
            $table->string('company')->nullable();
            $table->string('sync_status')->nullable();
            $table->string('gsm_status')->nullable();
            $table->string('wifi_status')->nullable();
            $table->string('mqtt_broker')->nullable();
            $table->string('port')->nullable();
            $table->string('mqtt_user_name')->nullable();
            $table->string('mqtt_pass')->nullable();
            $table->string('device_password')->nullable();
            $table->string('data_interval')->nullable();
            $table->string('wifi1_ssid')->nullable();
            $table->string('wifi1_pass')->nullable();
            $table->string('wifi1_priority')->nullable();
            $table->string('wifi2_ssid')->nullable();
            $table->string('wifi2_pass')->nullable();
            $table->string('wifi2_priority')->nullable();
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
        Schema::dropIfExists('device_configs');
    }
}
