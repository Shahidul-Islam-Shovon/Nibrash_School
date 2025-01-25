@extends('layouts.dashboard')


@section('title')
Enrolled Students
@endsection

@section('content')
<div class="container">
    <h4 class="mb-3">এনরোল করা শিক্ষার্থীদের সংখ্যা 
        <span class="badge bg-danger" id="unread-count">{{ $unreadCount }}</span>
    </h4>

    <!-- Student List -->
    <table id="myTable" class="table table-hover table-bordered">
        <thead class="table-dark">
            <tr>
                <th>SL</th>
                <th>নাম</th>
                <th>শ্রেণি</th>
                <th>ফোন নাম্বার</th>
                <th>বর্তমান অবস্থা </th>
            </tr>
        </thead>
        <tbody>
            @foreach($enrollments as $key => $enrollment)
                <tr class="student-row {{ $enrollment->is_read ? '' : 'unread' }}" data-id="{{ $enrollment->id }}">
                    <td>{{ $key + 1 }}</td>
                    <td>
                        <a href="#" class="student-details" data-id="{{ $enrollment->id }}">
                            {{ $enrollment->name }}
                        </a>
                    </td>
                    <td>{{ $enrollment->class_want_to_admission }}</td>
                    <td>{{ $enrollment->phone_number }}</td>
                    <td class="status-text">
                        {{ $enrollment->is_read ? 'Read' : 'Unread' }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Student Details -->
    <div id="student-details" class="mt-4 card p-3 shadow-sm" style="display: none;">
        <h4>Student Details</h4>
        <p><strong>Name:</strong> <span id="s-name"></span></p>
        <p><strong>Class:</strong> <span id="s-class"></span></p>
        <p><strong>Father's Name:</strong> <span id="s-father"></span></p>
        <p><strong>Mother's Name:</strong> <span id="s-mother"></span></p>
        <p><strong>Address:</strong> <span id="s-address"></span></p>
        <p><strong>Date of Birth:</strong> <span id="s-dob"></span></p>
        <p><strong>Phone Number:</strong> <span id="s-phone"></span></p>
    </div>
</div>

<!-- JavaScript for AJAX -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.student-details').forEach(function (element) {
        element.addEventListener('click', function (event) {
            event.preventDefault();
            let studentId = this.getAttribute('data-id');

            fetch(`/enrollment/${studentId}`)
                .then(response => response.json())
                .then(data => {
                    // ডিটেইলস আপডেট করা
                    document.getElementById('s-name').innerText = data.name;
                    document.getElementById('s-class').innerText = data.class_want_to_admission;
                    document.getElementById('s-father').innerText = data.father_name;
                    document.getElementById('s-mother').innerText = data.mother_name;
                    document.getElementById('s-address').innerText = data.address;
                    document.getElementById('s-dob').innerText = data.date_of_birth;
                    document.getElementById('s-phone').innerText = data.phone_number;
                    document.getElementById('student-details').style.display = 'block';

                    // টেবিলের স্টাইল পরিবর্তন করা (AJAX Update)
                    let row = document.querySelector(`.student-row[data-id='${studentId}']`);
                    row.classList.remove('unread');
                    row.querySelector('.status-text').innerText = 'Read';

                    // নোটিফিকেশন সংখ্যা আপডেট
                    let unreadCount = document.querySelectorAll('.unread').length;
                    document.getElementById('unread-count').innerText = unreadCount;
                });
        });
    });
});
</script>

<style>
    /* আনরিড স্টাইল */
    .unread {
        font-weight: bold;
        color: black;
        background-color: #ffeeba; /* হালকা হলুদ ব্যাকগ্রাউন্ড */
    }

    /* টেবিল স্টাইল */
    .table {
        border-radius: 10px;
        overflow: hidden;
    }

    .table th {
        text-align: center;
    }

    .table-hover tbody tr:hover {
        background-color: #f1f1f1;
        cursor: pointer;
    }

    /* ডিটেইলস বক্স */
    .card {
        background-color: #f8f9fa;
    }
</style>
@endsection
