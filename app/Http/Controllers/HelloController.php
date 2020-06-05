<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Request;

class HelloController extends Controller
{
	public function write(Request $moji)
	{
	    $data = $moji::all();
	    return view('testform',compact('data'));
	}
}