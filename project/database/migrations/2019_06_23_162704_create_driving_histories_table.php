<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrivingHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driving_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('admin_id');
            $table->bigInteger('diver_id');
            $table->bigInteger('passenger_id');
            $table->string('from'); //place from where the journey started
            $table->string('to'); //place to where the journey started
            $table->integer('rating')->nullable();
            $table->double('fare',10,4)->nullable();
            $table->double('fuel_cost',10,4)->nullable();
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
        Schema::dropIfExists('driving_histories');
    }
}
