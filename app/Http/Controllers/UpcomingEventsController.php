<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpcomingEventsController extends Controller
{
    public function show_form(){
        return view('Admin.Events.events_add');
    }

    public function store_form(Request $request){
        
    }
}
