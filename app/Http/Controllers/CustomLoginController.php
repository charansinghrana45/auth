<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class CustomLoginController extends Controller
{
	
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
    	return view('custom.login');
    }

    public function login(request $request)
    {
    	$this->validate($request, [
    		   'email' => 'required|email',
    	       'password' => 'required|string',

    		]);

    	$email = $request->email;
    	$password = $request->password;

    	if(Auth::guard('admin')->attempt(['email' => $email, 'password' => $password] )) {
    	    // Authentication passed...
    	    return redirect()->route('dashboard');
    	}

    	return redirect()->route('custom.login');

    }

   public function logout(Request $request)
   {
        Auth::guard('admin')->logout();

        $request->session()->flush();
        $request->session()->regenerate();
       
        return redirect()->guest(route('custom.login'));
   }
}
