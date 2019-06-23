<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ta_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('contact_no')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('contact_no_verified_at')->nullable();
            $table->string('password');
            $table->boolean('is_admin')->default(false);
            $table->boolean('is_active')->default(false);
            $table->integer('transport_agency_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('transport_agency_id')->references('id')->on('transport_agencies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ta_users');
    }
}
