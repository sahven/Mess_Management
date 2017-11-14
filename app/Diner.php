<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Diner extends Model
{
		public function showall($request){

			$all = DB::select("
					select * 
					from Diner
					where
					UserID = ?
					",array(1));

			return $all;

		}

		public function opinions(){

			$all = DB::select("
				select *
				from Product natural join Opinions
				where
				UserID = ?
				",array(1));

			return $all;
		
		}

		public function addopinion($request){

			DB::insert("
				insert into Opinions(UserID,CatererID,ProductID,Rating,Description)
				values(?,?,?,?,?)
				",array(1,$request['catererid'],$request['productid'],$request['rating'],$request['description']));
		}

		
}
