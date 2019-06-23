<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('model');
            $table->string('sku')->unique();
            $table->integer('bus_type_id')->unsigned();
            $table->boolean('air_condition')->default(true);
            $table->integer('ta_id')->unsigned();
            $table->integer('seat_layout_id')->unsigned()->nullable();
            $table->integer('partner_id')->unsigned()->nullable();
            $table->date('added_on');
            $table->date('journey_start_from');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('bus_type_id')->references('id')->on('vehicle_types')->onDelete('cascade');
            $table->foreign('ta_id')->references('id')->on('transport_agencies')->onDelete('cascade');
            $table->foreign('partner_id')->references('id')->on('transport_agency_partners')->onDelete('cascade');
            $table->foreign('seat_layout_id')->references('id')->on('seat_layouts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buses');
    }
}
