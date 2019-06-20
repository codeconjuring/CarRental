<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rentlocation extends Model
{
    public function car(){
    	return $this->belongsTo('App\Car','cars','id');
    }

    public function agent(){
    	return $this->belongsTo('App\User','agent_id','id');
    }

}
