<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMiniTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mini_trips', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('trip_id')->unsigned();
            $table->integer('bus_id')->unsigned();
            $table->integer('operational_interval_id')->unsigned()->nullable();
            $table->integer('from_station_id')->unsigned();
            $table->integer('to_station_id')->unsigned();
            $table->time('departure_time');
            $table->time('arrived_at');
            $table->float('ticket_price')->default(0);
            $table->boolean('active')->default(true);
            $table->timestamps();
            $table->foreign('trip_id')->references('id')->on('trips')->onDelete('cascade');
            $table->foreign('bus_id')->references('id')->on('buses')->onDelete('cascade');
            $table->foreign('operational_interval_id')->references('id')->on('operational_intervals')->onDelete('cascade');
            $table->foreign('from_station_id')->references('id')->on('stations');
            $table->foreign('to_station_id')->references('id')->on('stations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mini_trips');
    }
}
