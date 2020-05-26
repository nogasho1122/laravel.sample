<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function index()
    {
        return view('hello');
    }

    public function postIndex()
    {
        $only = Request::only('meassage');
        return view('add.only', compact('only'));
    }
}
