<?php

namespace App\Http\Controllers;

use App\Opinion;

use Illuminate\Http\Request;

class OpinionController extends Controller
{
    public function __construct(){

        $this->middleware('auth');

    }

    public function viewopinion(){

    	$opinion = new Opinion;
    	$all = $opinion->opinions();
    	return view('/user/opinion',compact('all'));

    }

    public function add(){

    	$opinion = new Opinion;
    	$opinion->addopinion(request()->all());
    	$all = $opinion->opinions();
    	return view('/user/opinion',compact('all'));
    }
}
