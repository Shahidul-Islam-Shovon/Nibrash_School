<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Notice;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function front_end_index(){
        $all_notice = Notice::latest()->get();
        $all_events = Event::latest()->get();
        return view('Frontend.index', compact('all_notice', 'all_events'));
    }
}
