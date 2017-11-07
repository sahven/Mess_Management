<?php

namespace App\Http\Controllers;

use App\Pricing;

use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index(){

    	return view('/caterer/pricing/pricing');

    }

    public function view(){

    	return view('/caterer/pricing/view');

    }

    public function show(){

    	$pricing = new Pricing;
    	$show = $pricing->showall(request()->all());
    	
    }
}
