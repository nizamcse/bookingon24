<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('line_id')->unsigned();
            $table->integer('bus_id')->unsigned();
            $table->integer('operational_interval_id')->unsigned()->nullable();
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->float('ticket_price')->default(0);
            $table->boolean('air_conditioned')->default(false);
            $table->timestamps();
            $table->foreign('line_id')->references('id')->on('lines')->onDelete('cascade');
            $table->foreign('bus_id')->references('id')->on('buses')->onDelete('cascade');
            $table->foreign('operational_interval_id')->references('id')->on('operational_intervals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }
}
