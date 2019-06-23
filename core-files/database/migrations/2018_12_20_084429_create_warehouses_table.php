<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarehousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ta_id')->unsigned();
            $table->integer('created_by')->unsigned()->nullable();
            $table->string('name');
            $table->string('address')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('ta_id')->references('id')->on('transport_agencies')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('ta_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('warehouses');
    }
}
