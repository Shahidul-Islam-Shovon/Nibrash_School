@extends('layouts.dashboard')


@section('title')
Enrolled Students
@endsection

@section('content')
<div class="container">
    
    <!-- Student List -->
   <div class="card">
    <div class="card-header">
        <h4 class="mb-3">এনরোল করা শিক্ষার্থীদের সংখ্যা 
        <span class="badge bg-danger" id="unread-count">{{ $unreadCount .  ' জন অপেক্ষমান আছেন' }} </span>
    </h4>
    <h5 style="font-weight: 800; color:rgba(255, 0, 0, 0.705)">শিক্ষার্থীর বিস্তারিত তথ্যর জন্য নামে ক্লিক করুন</h5>

    </div>
    <div class="card-body shadow-lg p-3 mb-5 bg-white rounded">
         <table id="myTable" class="table table-hover table-bordered">
        <thead class="table-dark">
            <tr>
                <th>SL</th>
                <th>নাম</th>
                <th>যে শ্রেণিতে ভর্তি হতে চায়</th>
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
    </div>
   </div>

    <!-- Student Details -->
    <div id="student-details" class="mt-4 p-3 shadow-sm" style="display: none;">
        <h4>শিক্ষার্থীর সম্পূর্ণ তথ্য</h4>
        <hr>
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
                    row.classList.remove('unread'); // আনরিড রিমুভ করবো
                    row.querySelector('.status-text').innerText = 'Read';

                    // নোটিফিকেশন সংখ্যা আপডেট করা
                    let unreadCount = document.querySelectorAll('.unread').length;
                    document.getElementById('unread-count').innerText = unreadCount;

                    // স্টাইল পরিবর্তন নিশ্চিত করা (ডায়নামিকভাবে CSS অ্যাপ্লাই)
                    row.style.fontWeight = "normal";
                    row.style.color = "#333"; // সাধারণ কালার
                    row.style.backgroundColor = "transparent";
                });
        });
    });
});

</script>

<style>
    /* আনরিড শিক্ষার্থীদের জন্য স্টাইল */
.unread {
    font-weight: 900 !important;
    color: black !important;
    background-color: #ffeeba !important;
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

/* টেবিলের ভেতরের টেক্সট কালো থাকবে */
.unread td {
    font-weight: 900 !important;
    color: black !important;
}
.student-details{
    color: black;
}


</style>


@endsection
