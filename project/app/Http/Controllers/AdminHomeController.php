<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller
{
    	public function __construct()
    	{
    	    $this->middleware('auth:admin');
    	}

    	// admin dashbord view
        public function showadminhome(){
        	
        	return view('Admin.AdminHome');
        }
        // admin log out
        public function adminlogout(Request $request){

        	$this->guard()->logout();

        	$request->session()->invalidate();

        	return $this->loggedOut($request) ?: redirect('/admin-login');
        }

        protected function loggedOut(Request $request)
        {
            //
        }

        // guard function
        protected function guard()
        {
            return Auth::guard('admin');
        }


}
