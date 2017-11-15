<?php

namespace App\Http\Controllers;

use App\Diner;

use App\Caterer;

use App\User;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    
    public function __construct(){

        $this->middleware('guest');

    }

    public function createuser(){

    	return view('/registration/registeruser');

    }

    public function storeuser(){

    	// Validation
    	$this->validate(request(),[

    			'emailid' => 'required|email' ,
    			'password' => 'required|confirmed'

    		]);

    	// Inserting User in Diner Table
    	$diner = new Diner;
    	$diner->insert(request()->all());

    	// Inserting User in User Table
    	User::insertuser(request()->all());

    	// Redirecting User to the HomePage
    	return redirect('/user/home');

    }

    public function createcaterer(){

    	return view('/registration/registercaterer');

    }

    public function storecaterer(){

    	// Validation
    	$this->validate(request(),[

    			'emailid' => 'required|email' ,
    			'password' => 'required|confirmed'

    		]);

    	// Inserting User in Diner Table
    	$caterer = new Caterer;
    	$caterer->insert(request()->all());

    	// Inserting User in User Table
    	User::insertcaterer(request()->all());

    	// Redirecting User to the HomePage
    	return redirect('/caterer/home');

    }
}
