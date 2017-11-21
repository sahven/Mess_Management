<?php

namespace App\Http\Controllers;

use App\Subscription;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    
    public function __construct(){

        $this->middleware('auth');

    }

	public function index(){

		return view('/caterer/subscriptions/subscriptions');

	}

	public function view(){

		$sub = new Subscription;
		$all = $sub->showall();
		return view('/caterer/subscriptions/view',compact('all'));

	}

	public function add(){

		return view('/caterer/subscriptions/add');

	}

	public function submit(){

		$this->validate(request(),[

			'rollno' => 'required',
			'planid' => 'required'

			]);

		$sub = new Subscription;
		$sub->insert_into(request()->all());
		return redirect('/caterer/subscriptions/view');

	}

	public function delete(){

		return view('/caterer/subscriptions/delete');

	}

	public function verify(){

		return view('/caterer/subscriptions/verify');

	}

	public function delete_subscriber(){

		$sub = new Subscription;
		$sub->delete_subs(request()->all());
		return redirect('/caterer/subscriptions/view');

	}

	public function verify_subscriber(){

		$sub = new Subscription;
		$num = $sub->verify_subs(request()->all());
		if ($num == 1) {
			return redirect('/caterer/transaction/add');
		}
		else{
			
			return redirect('/caterer/subscriptions/verifyresult');
		}
	}

	public function verifyresult(){

		return view('/caterer/subscriptions/verifyresult');

	}

	public function usersub(){

		$sub = new Subscription;
		$all = $sub->usersub(request()->all());
		return view('/user/subscription',compact('all'));
		
	}

}
