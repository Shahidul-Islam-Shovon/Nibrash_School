<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\ManageTeacher;
use App\Models\Notice;
use Illuminate\Http\Request;

class InsidePageManageController extends Controller
{
    public function see_page_teacher(){
        $all_teachers = ManageTeacher::latest()->get();
        return view('Frontend.Inside.teachers', compact('all_teachers'));
    }


    public function single_notice($encryptedId){
        $id = decrypt($encryptedId);
        $single_notices = Notice::findOrFail($id);
        return view('Frontend.Inside.notices', compact('single_notices'));
    }

    public function single_events($encryptedId){
        $id = decrypt($encryptedId);
        $single_events = Event::findOrFail($id);
        return view('Frontend.Inside.events', compact('single_events'));
    }

}
