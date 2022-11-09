<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function user(){
        $user=User::all();
        return view ('backend.pages.user.user',compact('user'));
    }
    public function useradd(){
        return view ('backend.pages.user.adduser');
    }
    public function submit(Request $submit){
        //dd($submit->all ());

        User::create([
            'name'=>$submit->name,
            'email'=>$submit->email,
            'contact'=>$submit->contact,
            'address'=>$submit->address,
            'password'=>$submit->password,
        ]);

        return redirect()->route('user');
    }
}
