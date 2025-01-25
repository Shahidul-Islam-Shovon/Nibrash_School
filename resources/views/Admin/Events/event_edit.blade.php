@extends('layouts.dashboard')


@section('title')
Edit Events
@endsection


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4>ইভেন্ট এডিট করুন</h4>
            <form action="{{route('events.update.form', $all_events->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label>বর্তমান ছবি:</label><br>
                    @if ($all_events->event_image)
                        <img src="{{ asset('storage/Events/'.$all_events->event_image) }}" width="150"><br><br>
                    @else
                        <p>কোনো ছবি নেই</p>
                    @endif

                    <label>নতুন ছবি (অপশনাল):</label>
                    <input class="form-control" type="file" name="event_image"><br><br>

                    <label for="">ইভেন্টস এর শিরোনাম</label>
                    <input type="text" name="event_headline" class="form-control" value="{{$all_events->event_headline}}">
                    @error('event_headline')
                        <strong class="text-danger">{{$message}}</strong>
                    @enderror
                    <br>

                    <label for="">ইভেন্টস এর বিস্তারত</label><br>
                    <textarea class="form-control" name="event" cols="10" rows="5">{{$all_events->event}}</textarea>
                    @error('event')
                        <strong class="text-danger">{{$message}}</strong>
                    @enderror
                    <br>

                    <input type="submit" class="btn btn-primary" value="ডাটা আপডেট করুন">
                </form>
        </div>
    </div>
</div>
@endsection