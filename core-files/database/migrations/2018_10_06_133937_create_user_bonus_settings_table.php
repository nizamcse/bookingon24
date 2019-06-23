<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserBonusSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_bonus_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('is_active_registration_bonus')->default(false);
            $table->float('register_bonus_amount')->default(0);
            $table->boolean('is_active_referral_bonus')->default(false);
            $table->float('referral_bonus_amount')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_bonus_settings');
    }
}
