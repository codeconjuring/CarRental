<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    /**
     * Database table for this Model
     */
    protected $table='drivers';

    /**
     * Driving license informations of one particular driver
     *
     */
    public function driving_license()
    {
    	return $this->hasOne(DrivingLicense::class);
    }

    /**
     * Driving history of a particular driver
     */
    public function driving_history()
    {
    	return $this->hasOne(DrivingHistory::class,'driver_id','id');
    }
}
