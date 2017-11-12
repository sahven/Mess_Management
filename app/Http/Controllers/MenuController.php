<?php

namespace App\Http\Controllers;

use App\Menu;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){

		return view('/caterer/menu/menu');

	}

	public function view(){

		$menu = new Menu;
		$all = $menu->showall();
		return view('/caterer/menu/view',compact('all'));

	}
	
	public function modify(){

		return view('/caterer/menu/modify');

	}

	public function add(){

		return view('/caterer/menu/add');

	}

	public function delete(){

		return view('/caterer/menu/delete');

	}

	public function insert(){

		$menu = new Menu;
		$menu->insert(request()->all());
		$all = $menu->showall();
		return view('/caterer/menu/view',compact('all'));

	}

	public function remove(){

		$menu = new Menu;
		$menu->remove(request()->all());
		$all = $menu->showall();
		return view('/caterer/menu/view',compact('all'));
	
	}	
}
