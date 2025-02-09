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
					  <td>#</td>
					  <td>#</td>
					  <td>#</td>
					</tr>
				</thead>
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