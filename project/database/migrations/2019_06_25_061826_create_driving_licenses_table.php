<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrivingLicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driving_licenses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('driver_id');
            $table->string('license_number');
            $table->string('class')->nullable();
            $table->timestamp('exp_date')->nullable(); //expire date of license
            $table->string('prof_img')->nullable(); //profile picture name
            $table->string('phone')->nullable();    //contact number
            $table->timestamp('dob')->nullable(); //date of birth
            $table->text('address')->nullable();    //residential address
            $table->string('city')->nullable();     
            $table->string('state')->nullable();    
            $table->string('country')->nullable();
            $table->string('sex')->nullable();      //gender
            $table->string('height')->nullable();   //body height in feet
            $table->string('eye_color')->nullable();
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
        Schema::dropIfExists('driving_licenses');
    }
}
