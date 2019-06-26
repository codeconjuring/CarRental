<?php

namespace App\Http\Controllers\Driver;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Driver;
use App\DrivingHistory;

use Response;

class DriverHomeController extends Controller
{
	/**
	 * Middleware for driver
	 */
	public function __construct()
	{
		$this->middleware('auth:driver');
	}

	/**
	 * Driver dashboard view
	 */
	public function showdriverhome()
	{
		return view('Driver.DriverHome');
	}

	/**
	 * Driver profile view
	 */
	public function showdriverprofile()
	{
		
	}

	/**
	 * Driving history view
	 */
	public function showhistory()
	{
		//Fetching the driving history using DrivingHistory model
		$drivingHistory=DrivingHistory::where('driver_id',\Auth::guard('driver')->user()->id)->get(); 

		//Generating the view
		$view=view('drivingHistory',compact('drivingHistory'))->render(); //Generating the view

		//Returning the view to front end
		return response()->json(['driving_history_view'=>$view]);	
	}
}
