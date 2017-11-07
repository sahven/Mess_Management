<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Pricing extends Model
{
    public function showall($request){

    	$plan = $request['planid'];
    	
    	//Here, you have to enter the CatererID of the corresponding Caterer.
    	$show = DB::select("
			select * from Pricing
			where PlanID = ?
			and
			CatererID = ?
    		",array(plan,1));
    	
    	return $show;

    }
}
