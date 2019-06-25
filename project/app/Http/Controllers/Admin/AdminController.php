<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function adminloginform(){
    	return view('Admin.AdminLogin');
    }

    public function adminloginhome(Request $request){

    	$this->validateLogin($request);

    	if ($this->attemptLogin($request)) {
    	    return $this->sendLoginResponse($request);
    	}
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
    }

    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            $this->credentials($request), $request->filled('remember')
        );
    }

    protected function credentials(Request $request)
    {
        return $request->only('email', 'password');
    }

    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();
        return redirect('/admin-dashboard');
    }
    protected function guard()
    {
        return Auth::guard('admin');
    }
}
