<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BackendController extends Controller
{
    public function back_end_index(){
        
        return view('Admin.Notices.backend_index');
    }
}

