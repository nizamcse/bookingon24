<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperationalIntervalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operational_intervals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('start_date');
            $table->date('end_date');
            $table->boolean('sat')->default(true);
            $table->boolean('sun')->default(true);
            $table->boolean('mon')->default(true);
            $table->boolean('tue')->default(true);
            $table->boolean('wed')->default(true);
            $table->boolean('thu')->default(true);
            $table->boolean('fri')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operational_intervals');
    }
}
