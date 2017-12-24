<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Massage;

class massagesController extends Controller
{
    public function submit(request $request){
    	$this->validate($request, [ 

    		'name' => 'required',

    		'mail' => 'required'

    		]);

    	   	// Create a New Messages
    		$massage = new Massage;
    		$massage->name = $request->input('name');
    		$massage->mail = $request->input('mail');
    		$massage->massage = $request->input('massage');

    		//Save Message
    		$massage->save();

    		//Redirect
    		return redirect('/')->with('SUCCESS', 'Message Sent');

    		
    }
    		//view messages
    	    public function getmassage(){
    			$massages = massage::all(); 

    			return view('massages')->with('massage', $massages);
    		}
}
