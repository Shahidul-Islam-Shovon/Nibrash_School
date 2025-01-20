<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function front_end_index(){
        return view('Frontend.index');
    }
}
