<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PaymentController;

class PaymentController extends Controller
{
    public function payment(){
        return view('backend.pages.payment.payment');
    }
}
