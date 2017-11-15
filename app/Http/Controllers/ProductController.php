<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{
    
    public function __construct(){

        $this->middleware('auth');

    }

    public function index(){

    	return view('caterer/product');

    }
    
    public function add(){

    	$pro = new Product;
    	$pro->add(request()->all());
    	return view('caterer/home');

    }
}
