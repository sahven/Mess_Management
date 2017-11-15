<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Subscription extends Model
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

    public function showall(){

    	//Here you have to enter the CatererID of the corresponding caterer.
    	$all = DB::select("
			select Diner.RollNo,Subscribes.CatererID,Subscribes.PlanID
            from Subscribes,Diner
			where Subscribes.UserID = Diner.UserID
            and
            Subscribes.CatererID = ?
    		",array(Subscription::getid()));
    	return $all;

    }

    public function insert_into($request){

    	$rollno = $request['rollno'];

    	$userid = DB::select("
			select UserID
			from Diner
			where RollNo = ?
    		",array($rollno));

    	//Here, you have to enter the CatererID of the corresponding Caterer.
    	DB::insert("
			insert into Subscribes(UserID,CatererID,PlanID)
			values(?,?,?)
    		",array($userid[0]->UserID,Subscription::getid(),$request['planid']));
    }

    public function delete_subs($request){

    	$rollno = $request['rollno'];

    	$userid = DB::select("
			select UserID
			from Diner
			where RollNo = ?
    		",array($rollno));

    	//Here, you have to enter the CatererID of the corresponding Caterer.
    	DB::delete("
			delete from Subscribes
			where UserID = ?
			and
			CatererID = ?
    		",array($userid[0]->UserID,Subscription::getid()));
    }

    public function verify_subs($request){

    	$rollno = $request['rollno'];

    	$userid = DB::select("
			select UserID
			from Diner
			where RollNo = ?
    		",array($rollno));

    	//Here, you have to enter the CatererID of the corresponding Caterer.
    	$count = DB::select("
			select count(PlanID) as number from Subscribes
			where UserID = ?
			and
			CatererID = ?
    		",array($userid[0]->UserID,Subscription::getid()));

    	return $count;
    }
}
