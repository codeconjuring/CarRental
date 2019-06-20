<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentlocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentlocations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('location_name');
            $table->integer('cars');
            $table->string('agent_id');
            $table->string('rent_phone');
            $table->text('rent_address');
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
        Schema::dropIfExists('rentlocations');
    }
}
