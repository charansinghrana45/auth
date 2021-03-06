<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class DashboardController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
    	$user = Auth::guard('admin')->user();

    	return view('dashboard.home');
    }
}
