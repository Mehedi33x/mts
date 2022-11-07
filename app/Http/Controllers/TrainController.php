<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TrainController;

class TrainController extends Controller
{
    public function train(){
        return view("backend.pages.train.train");
    }
    public function addtrain(){
        return view ("backend.pages.train.addtrain");
        }

    public function store(Request $req){
        dd( $req->all());
    }
}