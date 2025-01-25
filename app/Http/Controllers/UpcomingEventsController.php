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
            $image->move(public_path('storage/Events'), $image_name);
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
        $id = decrypt($encryptedId);
        $all_events = Event::findOrFail($id);
        return view('Admin.Events.event_edit', compact('all_events'));
    }

    public function update_events(Request $request, $id){
        $request->validate([
            'event_headline' => 'required',
            'event' => 'required',
            'event_image' => 'image|mimes:jpg,png,jpeg,gif|max:6048'
        ]);

        $event = Event::findOrFail($id);

        // নতুন ছবি থাকলে আপলোড করা
        if ($request->hasFile('event_image')) {
            $image = $request->file('event_image');
            $imageName = time() . '.' . $request->event_image->extension();
            $request->event_image->storeAs('storage/Events', $imageName);
            $image->move(public_path('storage/Events'), $imageName);
            $event->event_image = $imageName;
        }

        // ডাটা আপডেট করা
        $event->event_headline = $request->event_headline;
        $event->event = $request->event;
        $event->save();

        return redirect()->route('events.show.form')->with('edit_success', 'ইভেন্ট সফলভাবে আপডেট হয়েছে!');
    }

    public function destroy_events($encryptedId) {
        $id = decrypt($encryptedId);
        $find_event = Event::findOrFail($id);

        // if image exists
        if ($find_event->event_image) {
            $imagePath = public_path('storage/Events/' . $find_event->event_image);  // events/256.jpg 
            if (file_exists($imagePath)) {
                unlink($imagePath); 
            }
        }

        $find_event->delete();

        return back()->with('delete_success', 'ইভেন্ট সফলভাবে মুছে ফেলা হয়েছে!');

    }


}
