<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DrivingLicense extends Model
{
    /**
     * Driver who holds the license
     */
    public function driver()
    {
    	return $this->belongsTo(Driver::class,'id','driver_id');
    }
}
