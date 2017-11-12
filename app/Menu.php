<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Menu extends Model
{
    public function showall(){

    	$all = DB::select("
			select *
			from Timing natural join Menu natural join Product
    		");
    	return $all;
    }

    public function insert($request){

    	DB::insert("
			insert into Menu(CatererID,ProductID,TimingID) 
			values(?,?,?)
    		",array(1,$request['productid'],$request['timingid']));

    }

    public function remove($request){

    	DB::delete("
			delete from Menu
			where
			CatererID = ?
			and
			TimingID = ?
			and
			ProductID = ?
    		",array(1,$request['timingid'],$request['productid']));
    }
}
