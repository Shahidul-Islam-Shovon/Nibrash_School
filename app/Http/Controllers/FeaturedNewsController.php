<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FeaturedNewsController extends Controller
{
    public function show_form(){
        return view('Admin.featured_news');
    }

    public function insert_news(Request $request)
    {
        $request->validate([
            'notice_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'notice_headline' => 'required|unique:notices,notice_headline', // Unique validation added
            'notice' => 'required',
        ], [
            'notice_headline.unique' => 'এই শিরোনামটি ইতিমধ্যে বিদ্যমান! অনুগ্রহ করে অন্যটি ব্যবহার করুন।',

            'notice_headline.required' => 'নোটিশের শিরোনাম খালি রাখা যাবে না !',
            'notice.required' => 'বিস্তারিত নোটিশ খালি রাখা যাবে না !',
        ]);

        $imageName = null;

        if ($request->hasFile('notice_image')) {
            $image = $request->file('notice_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/Images', $imageName);
        }

        Notice::create([
            'notice_headline' => $request->notice_headline,
            'notice' => $request->notice,
            'notice_image' => $imageName,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        

        return back()->with('success', 'নোটিশ সফলভাবে যোগ করা হয়েছে!');
    }


    public function show_news(){
        $show_notice = Notice::latest()->paginate(5);
        return view('Admin.featured_news', [
            'show_notice' => $show_notice,
        ]);
    }

    
}
