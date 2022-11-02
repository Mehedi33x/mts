<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(){
        return view ('backend.pages.user.user');
    }
    public function useradd(){
        return view ('backend.pages.user.adduser');
    }
}
