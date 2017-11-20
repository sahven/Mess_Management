<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Diner extends Model
{

	public function getid(){

		$email = \Auth::user()->email;
		$id = DB::select("
			select UserID 
			from Diner
			where
			EmailID = ?
			",array($email));
		return $id[0]->UserID;

	}

	public function showall($request){

		$all = DB::select("
				select * 
				from Diner
				where
				UserID = ?
				",array(Diner::getid()));

		return $all;

	}

	public function insert($request){

		DB::insert("
			INSERT INTO `Diner`(`FirstName`, `LastName`, `RollNo`, `EmailID`, `PhoneNo`, `DOB`, `YearOfStudy`, `Course`) VALUES (?,?,?,?,?,?,?,?)
			",array($request['firstname'],$request['lastname'],$request['rollno'],$request['emailid'],$request['phone'],$request['dob'],$request['year'],$request['course']));
	}
		
}
