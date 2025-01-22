<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class UpcomingEventsController extends Controller
{
    public function show_form(){
        return view('Admin.Events.events_add');
    }

    public function store_form(Request $request)
    {
        //ভ্যালিডেশন করা
        $validatedData = $request->validate([
            'event_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
            'event_headline' => 'required|string|max:355',
            'event' => 'required|string',
        ]);

        // নতুন Event অবজেক্ট তৈরি করা
        $event = new Event();

        // যদি ইমেজ থাকে, তাহলে আপলোড করা হবে
        if ($request->hasFile('event_image')) {
            $image = $request->file('event_image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/Images'), $image_name);
            $event->event_image = $image_name;
        }

        // ইভেন্টের অন্য ডাটা সেট করা
        $event->event_headline = $validatedData['event_headline'];
        $event->event = $validatedData['event'];

        // ডাটাবেজে সংরক্ষণ করা
        $event->save();

        // ইউজারকে সফল মেসেজ সহ রিডাইরেক্ট করা
        return redirect()->back()->with('success', 'ইভেন্ট সফলভাবে যোগ হয়েছে!');
    }

    public function show_all_events(){
        $all_events = Event::latest()->get();
        return view('Admin.Events.events_add', compact('all_events'));
    }

    public function edit_events($encryptedId){

    }

    public function destroy_events($encryptedId) {
        
    }
}
