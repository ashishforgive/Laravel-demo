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

    		 public function getmyproductsonindex(){
    			$myproducts = myproduct::all(); 

    			return view('/index')->with('myproduct', $myproducts);
    		}


    // Upload image
    
    	public function add(request $request){
    		$this->validate($request, [ 

    		'title' => 'required',

    		'desc' => 'required'

    		]);

    	   	// Create a New Messages
    		$myproducts = new myproduct;
    		$myproducts->title = $request->input('title');
    		$myproducts->desc = $request->input('desc');

    		if($request->hasFile('image')){
    			 $myproducts->image = $request->file('image')->store('public/uploads');

    		}
    		//$request->all();
    		$myproducts->save();

    		//Redirect
    		return redirect('/home')->with('SUCCESS', 'Product uploaded');	

    	}	
    	   
}
