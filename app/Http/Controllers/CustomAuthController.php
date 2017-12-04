<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomUser;

class CustomAuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showRegisterForm()
    {
    	return view('custom.register');
    }

    public function register(Request $request)
    {
    	$this->validate($request, [
    		   'name' => 'required|max:255|string',
    	       'email' => 'required|max:255|unique:users|email',
    	       'password' => 'required|max:255|string|confirmed',
    	   ]);

    	CustomUser::create(['name' => $request->name, 'email' => $request->email, 'password' => bcrypt($request->password)]);

    	return redirect()->route('custom.register')->with('status','successfully registered.');
    }
}
