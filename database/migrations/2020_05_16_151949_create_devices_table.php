<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('userid')->nullable();
            $table->smallInteger('desktop')->nullable();
            $table->smallInteger('laptop')->nullable();
            $table->smallInteger('printer')->nullable();
            $table->smallInteger('wifi')->nullable();
            $table->smallInteger('router')->nullable();
            $table->smallInteger('tablet')->nullable();
            $table->smallInteger('mobile')->nullable();
            $table->smallInteger('server')->nullable();
            $table->smallInteger('firewall')->nullable();
            $table->smallInteger('storage')->nullable();
            $table->smallInteger('ups')->nullable();
            $table->smallInteger('ipphone')->nullable();
            $table->smallInteger('switch')->nullable();
            $table->smallInteger('other')->nullable();
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
        Schema::dropIfExists('devices');
    }
}
