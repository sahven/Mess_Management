<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Menu extends Model
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

    	$all = DB::select("
			select *
			from Timing natural join Menu natural join Product
            order by TimingID
    		");
    	return $all;
    }

    public function insert($request){

    	DB::insert("
			insert into Menu(CatererID,ProductID,TimingID) 
			values(?,?,?)
    		",array(Menu::getid(),$request['productid'],$request['timingid']));

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
    		",array(Menu::getid(),$request['timingid'],$request['productid']));
    }
}
