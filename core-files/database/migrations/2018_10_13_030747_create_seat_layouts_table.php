<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeatLayoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seat_layouts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ta_id')->unsigned();
            $table->tinyInteger('total_row');
            $table->tinyInteger('total_column');
            $table->tinyInteger('number_of_seat');
            $table->string('name');
            $table->text('layout');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('ta_id')->references('id')->on('transport_agencies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seat_layouts');
    }
}
