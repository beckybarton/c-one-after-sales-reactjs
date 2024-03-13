<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $testvariable = "hello, variable from controller";
        // dd($testvariable); // Add this line
        return view('welcome')->with('testvariable', $testvariable);
    }
}
