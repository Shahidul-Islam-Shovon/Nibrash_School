<?php

namespace App\Http\Controllers;

use App\Models\ManageTeacher;
use Illuminate\Http\Request;

class InsidePageManageController extends Controller
{
    public function see_page(){
        $all_teachers = ManageTeacher::latest()->get();
        return view('Frontend.Inside.teachers', compact('all_teachers'));
    }
}
