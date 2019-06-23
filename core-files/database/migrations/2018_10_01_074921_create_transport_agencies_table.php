<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransportAgenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transport_agencies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('contact_no');
            $table->string('contact_person')->nullable();
            $table->string('contact_person_designation')->nullable();
            $table->string('slug')->unique();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('tin')->nullable();
            $table->string('trade_license_no')->nullable();
            $table->integer('created_by')->unsigned();
            $table->string('active')->default(false);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('created_by')->references('id')->on('admins');
            $table->index(['slug']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transport_agencies');
    }
}
