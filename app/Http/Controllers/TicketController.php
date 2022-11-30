<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TicketController;

class TicketController extends Controller
{
    public function ticket()
    {
        return view("backend.pages.ticket.ticket");
    }
    
}
