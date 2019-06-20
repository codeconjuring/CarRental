<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function showdriverform(){
    	return view('Admin.newdriverform');
    }
}
