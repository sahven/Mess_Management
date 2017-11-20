<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Diner;

use App\Transaction;

class DinerController extends Controller
{
    
    public function __construct(){

        $this->middleware('auth');

    }

    public function index(){

    	return view('/user/home');

    }

    public function profile(){

    	$diner = new Diner;
    	$all = $diner->showall(request()->all());
    	return view('/user/profile',compact('all'));

    }

}
