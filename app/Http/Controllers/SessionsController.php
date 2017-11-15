<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct(){

    	$this->middleware('guest',['except'=>'destroy']);
    }

    public function index(){

    	return view('/sessions/login');

    }

    public function login(){

    	// Validation
        
    	$this->validate(request(),[

    		'email' => 'required|email' ,
    		'password' => 'required'
    		
    		]);

    	if(!auth()->attempt(request(['email','password'])))
    		{
    			return back()->withErrors([

    				'message' => 'Please check your credentials'

    			]);
    		}
    	else
    	{

	    	$type = User::gettype(request()->all());    	
	    	if ($type == 'Caterer') {

	    		return redirect('/caterer/home');
	    	
	    	}
	    	else{

	    		return redirect('/user/home');

	    	}
	    }
    }

    public function destroy(){

    	auth()->logout();
    	return redirect('/');

    }
}
