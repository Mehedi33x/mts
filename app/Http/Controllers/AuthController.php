<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;

class AuthController extends Controller
{
    public function login(){
        
        return view('backend.login');

    }

    public function do_login(Request $request){
    //    dd($request->all());
        $data=$request->except('_token');
        if (Auth::attempt($data)){
            return redirect()->route('dashboard');
        }
        else {
            return redirect()->back();     
        }
        
    }
    

}