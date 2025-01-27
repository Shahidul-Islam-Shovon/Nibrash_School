@extends('layouts.dashboard')


@section('title')
    Teacher Add
@endsection


@section('content')

<div class="container">
    <div class="row">
        <div>
             <!-- Add Notice Button -->
            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addEventsModal">
                <i class="fa fa-plus"></i> নতুন শিক্ষক এড করুন
            </button>
                <h4> বর্তমানে শিক্ষকদের তালিকা </h4>
            </div>
        </div>
        <div>
                <!-- Success Message -->
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>              
                </div>
            @endif

            @if (session('edit_success'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ session('edit_success') }}</strong>              
                </div>
            @endif

            @if (session('delete_success'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ session('delete_success') }}</strong>              
                </div>
            @endif
            <!-- Error Message -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li><br>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{-- eror msg end --}}
            </div>

            {{-- show table start --}}
            <table id="myTable" class="table table-striped">
                <thead>
                    <tr>
                        <td>Sl.</td>
                        <td>শিক্ষকের ছবি</td>
                        <td>নাম</td>
                        <td>পদবী</td>
                        <td>ফোন নাম্বার</td>
                        <td>ফেসবুক</td>
                        <td>একশন</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($all_teachers as $key => $teacher)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>
                            @if ($teacher->teacher_image)
                                    <img src="{{ asset('storage/Teachers/'.$teacher->teacher_image) }}" width="70">
                            @else
                                    <span>কোনো ছবি নেই</span>
                             @endif
                        </td>
                        <td>{{$teacher->teacher_name}}</td>
                        <td>{{$teacher->designation}}</td>
                        <td>{{$teacher->phone_number}}</td>
                        <td><a href="{{$teacher->facebook_link}}"><i class="fa-brands fa-facebook-f"></i></a></td>
                                              
                        <td>
                            {{-- edit icon --}}
                            <a href="{{ route('teacher.edit', encrypt($teacher->id),$teacher->id) }}" class="btn btn-warning btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>

                            {{-- delete icon with form --}}
                            <form action="{{ route('teacher.destroy', encrypt($teacher->id),$teacher->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('আপনি কি সত্যিই ডিলিট করতে চান?');">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr> 
                    @endforeach
                </tbody>
            </table>
            {{-- show table end --}}
            
        {{-- modal with add form --}}
<div class="modal fade @if ($errors->any()) show d-block @endif" id="addEventsModal" tabindex="-1" aria-labelledby="addEventsModalLabel" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="addEventsModalLabel">নতুন শিক্ষক এড করুন</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="{{route('teacher.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="">শিক্ষকের ছবি সিলেক্ট করুন</label>
                    <input type="file" name="teacher_image" class="form-control">
                    @error('teacher_image')
                        <strong class="text-danger">{{$message}}</strong>
                    @enderror
                    <br>

                    <label for="">শিক্ষকের নাম</label>
                    <input type="text" name="teacher_name" class="form-control" value="{{ old('teacher_name') }}">
                    @error('teacher_name')
                        <strong class="text-danger">{{$message}}</strong>
                    @enderror
                    <br>

                    <label for="">পদবী</label><br>
                    <input class="form-control" name="designation">{{ old('designation') }}</input>
                    @error('designation')
                        <strong class="text-danger">{{$message}}</strong>
                    @enderror
                    <br>

                    <label for="">মোবাইল নাম্বার</label><br>
                    <input class="form-control" name="phone_number">{{ old('phone_number') }}</input>
                    @error('phone_number')
                        <strong class="text-danger">{{$message}}</strong>
                    @enderror
                    <br>

                    <label for="">ফেসবুক লিঙ্ক</label><br>
                    <input class="form-control" name="facebook_link">{{ old('facebook_link') }}</input>
                    @error('facebook_link')
                        <strong class="text-danger">{{$message}}</strong>
                    @enderror
                    <br>

                    <input type="submit" class="btn btn-primary" value="এড করুন">
                </form>
            </div>

        </div>
    </div>
</div>

<!-- Modal Open রাখার জন্য JavaScript -->
@if ($errors->any())
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var myModal = new bootstrap.Modal(document.getElementById('addEventsModal'));
            myModal.show();
        });
    </script>
@endif

</div>

@endsection