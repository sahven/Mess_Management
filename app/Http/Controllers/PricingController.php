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

    public function change(){

    	return view('/caterer/pricing/change');

    }

    public function viewresult(){

    	$price = new Pricing;
    	$all = $price->showall(request()->all());
    	return view('/caterer/pricing/viewresult',compact('all'));

    }

    public function update(){

    	$price = new Pricing;
    	$price->change(request()->all());
        $all = $price->showall(request()->all());
    	return view('/caterer/pricing/viewresult',compact('all'));

    	
    }
}
