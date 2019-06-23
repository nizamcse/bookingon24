<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('ta_id')->unsigned();
            $table->integer('departure_station')->unsigned();
            $table->integer('arrival_station')->unsigned();
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign('ta_id')->references('id')->on('transport_agencies')->onDelete('cascade');
            $table->foreign('departure_station')->references('id')->on('locations')->onDelete('cascade');
            $table->foreign('arrival_station')->references('id')->on('locations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lines');
    }
}
