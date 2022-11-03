<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function user(){
        return view ('backend.pages.user.user');
    }
    public function useradd(){
        return view ('backend.pages.user.adduser');
    }
    public function submit(Request $request){
        // dd($request->all ());

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password
        ]);

        return redirect()->route();
    }
}
