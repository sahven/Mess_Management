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

		
}
