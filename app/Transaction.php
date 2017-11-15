<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Transaction extends Model
{
	public function usergetid(){

		$email = \Auth::user()->email;

		$id = DB::select("
			select UserID 
			from Diner
			where
			EmailID = ?
			",array($email));
		
		return $id[0]->UserID;

	}
	public function caterergetid(){

		$email = \Auth::user()->email;

		$id = DB::select("
			select CatererID 
			from Caterer
			where
			EmailID = ?
			",array($email));
		
		return $id[0]->CatererID;

	}

    public function showuser($request){

    	$all = DB::select("
			select *
			from Transactions
			where
			UserID = ?
    		",array(Transaction::usergetid()));

    	return $all;
    }

    public function showcaterer(){

    	$all = DB::select("
			select *
			from Transactions natural join Diner
			where
			CatererID = ?
    		",array(Transaction::caterergetid()));

    	return $all;
    }

    public function create($request){

    	DB::insert("
			insert into Transactions(CatererID,UserID,Time)
			values(?,?,?)
    		",array(Transaction::caterergetid(),$request['userid'],$request['time']));
    }
}
