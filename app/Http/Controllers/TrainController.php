<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;
use App\Http\Controllers\TrainController;

class TrainController extends Controller
{
    public function addtrain(){
        return view ("backend.pages.train.addtrain");
        }

    public function store(Request $request){
        //dd( $request->all());
        Train::create([
            'train_name'=>$request->name,
            'seats'=>$request->seats,
            'from'=>$request->from,
            'to'=>$request->to,
            'status'=>$request->status,

        ]);
            return redirect()->route('fetch');
    }
    public function fetch(){
        $trains=Train::paginate(10);
        return view('backend.pages.train.train',compact('trains'));
    }

}