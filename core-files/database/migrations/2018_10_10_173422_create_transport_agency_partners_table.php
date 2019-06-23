<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransportAgencyPartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transport_agency_partners', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ta_id')->unsigned();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('contact_no');
            $table->string('contact_person')->nullable();
            $table->string('contact_person_designation')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('tin')->nullable();
            $table->string('trade_license_no')->nullable();
            $table->integer('created_by')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('created_by')->references('id')->on('ta_users');
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
        Schema::dropIfExists('transport_agency_partners');
    }
}
