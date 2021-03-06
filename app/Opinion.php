<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Opinion extends Model
{
    public static function getid(){

    	$email = \Auth::user()->email;
    	$id = DB::select("
    		select UserID 
    		from Diner
    		where
    		EmailID = ?
    		",array($email));
    	return $id[0]->UserID;

    }

    public function opinions(){

    	$all = DB::select("
    		select *
    		from Product natural join Opinions
    		");

    	return $all;
    
    }

    public function addopinion($request){

    	DB::insert("
    		insert into Opinions(UserID,CatererID,ProductID,Rating,Description)
    		values(?,?,?,?,?)
    		",array(Opinion::getid(),$request['catererid'],$request['productid'],$request['rating'],$request['description']));
    }
}
