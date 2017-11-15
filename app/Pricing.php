<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Pricing extends Model
{
    
    public function getid(){

        $email = \Auth::user()->email;
        $id = DB::select("
            select CatererID 
            from Caterer
            where
            EmailID = ?
            ",array($email));
        return $id[0]->CatererID;
    }

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
    		",array($plan,Pricing::getid()));
    	
    	return $show;

    }

    public function change($request){

        $check = DB::select("
            select Price
            from Pricing
            where
            TimingID = ?
            and 
            PlanID = ?
            and
            CatererID = ?
            ",array($request['timingid'],$request['planid'],Pricing::getid()));
        if ($check == NULL) {
            DB::insert("
                insert into Pricing(Price,TimingID,PlanID,CatererID)
                values(?,?,?,?)
                ",array($request['price'],$request['timingid'],$request['planid'],Pricing::getid()));
        }
        else{

            DB::update("
                update Pricing
                set Price = ?
                where 
                TimingID = ?
                and 
                PlanID = ?
                and
                CatererID = ?
                ",array($request['price'],$request['timingid'],$request['planid'],Pricing::getid()));
        }
    }
}
