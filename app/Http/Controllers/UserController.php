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
        $submit->validate([
            'name'=>'required',
            'email'=>'required',
            'contact'=>'required',
            'password'=>'required',

        ]);

        User::create([
            'name'=>$submit->name,
            'email'=>$submit->email,
            'contact'=>$submit->contact,
            'address'=>$submit->address,
            'password'=>bcrypt($submit->password),
        ]);

        return redirect()->route('user')->with('message','Data created successfully');
    }

    public function userDelete($id){
        $test=User::find($id)->delete();
        return back();
    }
    public function viewuser($user_id)
    {
      $test=User::find($user_id);
      return view('backend.pages.user.view',compact('test'));
    }



}
