<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\StationController;

class StationController extends Controller
{
    public function station() {
        return view('backend.pages.station.station');
    }
    public function add_station(){
        return view ('backend.pages.station.add_station');
    }
}
