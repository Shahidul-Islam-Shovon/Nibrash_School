@extends('layouts.dashboard')

@section('title')

Upcoming Events

@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div>
                 <!-- Add Notice Button -->
                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addEventsModal">
                    <i class="fa fa-plus"></i> ইভেন্টস এড করুন
                </button>

                <h4>আপকামিং সকল ইভেন্টস সমূহ </h4>
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

            {{-- show in a table --}}
            <table id="myTable" class="table table-striped">
                <thead>
                    <tr>
                        <td>Sl.</td>
                        <td>ইভেন্ট শিরোনাম</td>
                        <td>ইভেন্ট বিস্তারিত</td>
                        <td>ছবি</td>
                        <td>ক্রিয়েটেড</td>
                        <td>একশন</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($all_events as $key => $event)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$event->event_headline}}</td>
                        <td>{{$event->event}}</td>
                        <td>
                            @if ($event->event_image)
                                    <img src="{{ asset('storage/Images/'.$event->event_image) }}" width="70">
                            @else
                                    <span>কোনো ছবি নেই</span>
                             @endif
                        </td>
                        <td>{{ $event->created_at->format('d M, Y') }}</td>
                        <td>
                            {{-- edit icon --}}
                            <a href="{{ route('events.edit.form', encrypt($event->id),$event->id) }}" class="btn btn-warning btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            {{-- delete icon with form --}}
                            <form action="{{ route('event.destroy', encrypt($event->id),$event->id) }}" method="POST" class="d-inline">
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
        </div>
    </div>
</div>


{{-- modal with add form --}}

<div class="modal fade @if ($errors->any()) show d-block @endif" id="addEventsModal" tabindex="-1" aria-labelledby="addEventsModalLabel" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="addEventsModalLabel">নতুন ইভেন্টস যোগ করুন</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="{{route('events.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="">ছবি সিলেক্ট করুন</label>
                    <input type="file" name="event_image" class="form-control">
                    @error('event_image')
                        <strong class="text-danger">{{$message}}</strong>
                    @enderror
                    <br>

                    <label for="">ইভেন্টস এর শিরোনাম</label>
                    <input type="text" name="event_headline" class="form-control" value="{{ old('event_headline') }}">
                    @error('event_headline')
                        <strong class="text-danger">{{$message}}</strong>
                    @enderror
                    <br>

                    <label for="">ইভেন্টস এর বিস্তারত</label><br>
                    <textarea class="form-control" name="event" cols="10" rows="5">{{ old('event') }}</textarea>
                    @error('event')
                        <strong class="text-danger">{{$message}}</strong>
                    @enderror
                    <br>

                    <input type="submit" class="btn btn-primary" value="সংরক্ষণ করুন">
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

@endsection