<?php

namespace App\Http\Controllers;

use App\Transaction;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(){

    	return view('/caterer/transaction/transaction');

    }

    public function view(){

    	$tran = new Transaction;
    	$all = $tran->showcaterer();
    	return view('/caterer/transaction/view',compact('all'));
    }

    public function add(){

    	return view('/caterer/transaction/add');
    }

    public function create(){

    	$tran = new Transaction;
    	$tran->create(request()->all());
    	$all = $tran->showcaterer();
    	return view('/caterer/transaction/view');
    }
}
