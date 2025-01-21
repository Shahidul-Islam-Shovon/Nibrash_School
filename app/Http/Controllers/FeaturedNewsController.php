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
        // **Validation Logic**
        $validatedData = $request->validate([
            'notice_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'notice_headline' => 'required|string|max:255',
            'notice' => 'required|string',
        ]);

        // ** Insert Logic **
        $notice = new Notice();

        // যদি ছবি থাকে তাহলে আপলোড করব
        if ($request->hasFile('notice_image')) {
            $image = $request->file('notice_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/Images'), $imageName);
            $notice->notice_image = $imageName;
        }

        // অন্য ফিল্ড গুলো সংরক্ষণ
        $notice->notice_headline = $validatedData['notice_headline'];
        $notice->notice = $validatedData['notice'];
        $notice->save();

        return redirect()->back()->with('success', 'নোটিশ সফলভাবে যোগ হয়েছে!');
    
    }


    public function show_news(){
        $show_notice = Notice::latest()->paginate(5);
        return view('Admin.featured_news', [
            'show_notice' => $show_notice,
        ]);
    }

    public function edit_news($encryptedId){
        $id = decrypt($encryptedId);
        $notice = Notice::findOrFail($id);
        return view('Admin.featured_news_edit', compact('notice'));
    }


    public function update_news(Request $request, $id){
        $request->validate([
            'notice_headline' => 'required',
            'notice' => 'required',
            'notice_image' => 'image|mimes:jpg,png,jpeg,gif|max:2048'
        ]);

        $notice = Notice::findOrFail($id);

        // নতুন ছবি থাকলে আপলোড করা
        if ($request->hasFile('notice_image')) {
            $imageName = time() . '.' . $request->notice_image->extension();
            $request->notice_image->storeAs('public/Images', $imageName);
            $notice->notice_image = $imageName;
        }

        // ডাটা আপডেট করা
        $notice->notice_headline = $request->notice_headline;
        $notice->notice = $request->notice;
        $notice->save();

        return redirect()->route('featured_news.form')->with('edit_success', 'নোটিশ সফলভাবে আপডেট হয়েছে!');
    }

    public function destroy_news($encryptedId){
        $id = decrypt($encryptedId);
        $notice = Notice::findOrFail($id);

        // যদি ইমেজ থেকে থাকে তবে ডিলিট করব
        if ($notice->notice_image) {
            $imagePath = public_path('storage/Images/' . $notice->notice_image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // ডাটাবেজ থেকে ডিলিট করব
        $notice->delete();

        return back()->with('delete_success', 'নোটিশ সফলভাবে মুছে ফেলা হয়েছে!');
    }

    
}
