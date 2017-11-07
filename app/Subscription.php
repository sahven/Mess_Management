<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Subscription extends Model
{
    public function showall(){

    	//Here you have to enter the CatererID of the corresponding caterer.
    	$all = DB::select("
			select * from Subscribes
			where CatererID = ?
    		",array(1));
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
    		",array($userid[0]->UserID,1,$request['planid']));
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
    		",array($userid[0]->UserID,1));
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
    		",array($userid[0]->UserID,1));

    	return $count;
    }
}
