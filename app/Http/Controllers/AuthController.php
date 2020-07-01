<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function welcome(request $request){
        $first = $request ["fname"];
        $last = $request ["lname"];
        $data = array ('first'=>$first, 'last'=>$last);
        return view('welcome2',$data);
    }
    
    
}
