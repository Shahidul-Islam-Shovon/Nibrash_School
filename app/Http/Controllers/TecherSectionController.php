<?php

namespace App\Http\Controllers;

use App\Models\ManageTeacher;
use Illuminate\Http\Request;

class TecherSectionController extends Controller
{
    public function show_form(){
        $all_teachers = ManageTeacher::latest()->get();
        return view('Admin.Manage_Teacher.teacher_create', compact('all_teachers'));
    }

    public function store_form(Request $request){
        $validator = $request->validate([

            'teacher_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|     max:6048',
            'teacher_name'  =>  'required',
            'designation'   =>   'required',
            'phone_number'  =>  'required',
            'facebook_link' => 'nullable',

        ]);
     
        $manage_teacher = new ManageTeacher();

        if($request->hasFile('teacher_image')){
            $image = $request->file('teacher_image');
            $imageName = time(). '.' .$image->getClientOriginalExtension();
            $image->move(public_path('storage/Teachers'), $imageName);
            $manage_teacher->teacher_image = $imageName;
        }

        $manage_teacher->teacher_name = $validator['teacher_name'];
        $manage_teacher->designation = $validator['designation'];
        $manage_teacher->phone_number = $validator['phone_number'];
        $manage_teacher->facebook_link = $validator['facebook_link'];

        $manage_teacher->save();

        return redirect()->back()->with('success', 'টিচার সফলভাবে যোগ করা হয়েছে!');
    }

    public function edit_form($encryptedId){
        
    }

    public function destroy_teacher($encryptedId){
        
    }
}
