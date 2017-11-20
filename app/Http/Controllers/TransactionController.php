<?php

namespace App\Http\Controllers;

use App\Transaction;

use Illuminate\Http\Request;

class TransactionController extends Controller
{

    public function __construct(){

        $this->middleware('auth');

    }

    public function index(){

    	return view('/caterer/transaction/transaction');

    }

    public function viewcaterer(){

    	$tran = new Transaction;
    	$all = $tran->showcaterer();
    	return view('/caterer/transaction/view',compact('all'));
    }

    public function viewuser(){

        $tran = new Transaction;
        $all = $tran->showuser(request()->all());
        return view('/user/transaction',compact('all'));
    }

    public function add(){

    	return view('/caterer/transaction/add');
    }

    public function create(){

    	$tran = new Transaction;
    	$tran->create(request()->all());
    	$all = $tran->showcaterer();
    	return view('/caterer/transaction/view',compact('all'));
    }

}
