<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view ("backend.pages.home");
    }
    public function dashboard(){
        return view ("backend.pages.dashboard");
    }
}
