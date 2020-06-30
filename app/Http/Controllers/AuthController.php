<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function form(){
        return view('form');
    }
    
    function save(Request $req){
        return view('welcome',compact('req'));
    }
}
