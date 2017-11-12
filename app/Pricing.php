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
			select Timing.Day,Timing.StartTime,Pricing.Price
            from Timing,Pricing
			where
            Timing.TimingID = Pricing.TimingID
            and
            PlanID = ?
			and
			CatererID = ?
    		",array($plan,1));
    	
    	return $show;

    }

    public function change($request){

        DB::update("
            update Pricing
            set Price = ?
            where 
            TimingID = ?
            and 
            PlanID = ?
            and
            CatererID = ?
            ",array($request['price'],$request['timingid'],$request['planid'],1));
    }
}
