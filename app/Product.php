<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Product extends Model
{
    
    public function add($request){

    	DB::insert("
			insert into Product(ProductName)
			values(?)
    		",array($request['productname']));
    }
}
