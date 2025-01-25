<?php

namespace App\Http\Controllers;

use App\Models\StudentEnrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    // **শিক্ষার্থীদের তালিকা দেখাবে**
    public function index()
    {
        $enrollments = StudentEnrollment::orderBy('is_read', 'asc')->orderBy('created_at', 'desc')->get();
        $unreadCount = StudentEnrollment::where('is_read', false)->count();

        return view('Admin.enrollments.index', compact('enrollments', 'unreadCount'));
    }

    // **নতুন শিক্ষার্থী এনরোল করবে**
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'class_want_to_admission' => 'required|string|max:255',
            'address' => 'required|string',
            'father_name' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'phone_number' => 'required|string|max:20',
        ]);

        StudentEnrollment::create($validatedData);

        return redirect()->back()->with('success', 'Student enrolled successfully!');
    }

    // **নির্দিষ্ট শিক্ষার্থীর তথ্য দেখাবে এবং তাকে "read" মার্ক করবে**
    public function show($id)
    {
        $enrollment = StudentEnrollment::findOrFail($id);

        // is_read কে true করে আপডেট করা
        if (!$enrollment->is_read) {
            $enrollment->update(['is_read' => true]);
        }

        return response()->json($enrollment);
    }
}
