<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\myproduct;

class myproductsController extends Controller
{
    //view products
    	    public function getmyproducts(){
    			$myproducts = myproduct::all(); 

    			return view('product')->with('myproduct', $myproducts);
    		}
}
