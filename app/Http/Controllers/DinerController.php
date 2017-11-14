<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Diner;

class DinerController extends Controller
{
    
    public function index(){

    	return view('/user/home');

    }

    public function profile(){

    	$diner = new Diner;
    	$all = $diner->showall(request()->all());
    	return view('/user/profile',compact('all'));

    }

    public function opinion(){


    }
}
