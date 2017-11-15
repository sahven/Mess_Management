<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Caterer extends Model
{
    public function insert($request){

    	DB::insert("
			insert into Caterer(CatererName,EmailID)
			values(?,?)
    		",array($request['caterername'],$request['emailid']));

    }
}
