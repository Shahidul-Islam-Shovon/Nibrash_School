@extends('layouts.dashboard')


@section('title')

Edit Notice 

@endsection


@section('content')
    <h2>নোটিশ এডিট করুন</h2>

    <form action="{{ route('featured_news.update', $notice->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>নোটিশ এর শিরোনাম</label>
        <input class="form-control" type="text" name="notice_headline" value="{{ $notice->notice_headline }}" required><br><br>

        <label>বিস্তারিত নোটিশ</label>
        <textarea class="form-control" name="notice" cols="10" rows="10" required>{{ !! $notice->notice !!}} </textarea><br><br>

        <label>বর্তমান ছবি:</label><br>
        @if ($notice->notice_image)
            <img src="{{ asset('storage/Images/'.$notice->notice_image) }}" width="150"><br><br>
        @else
            <p>কোনো ছবি নেই</p>
        @endif

        <label>নতুন ছবি (অপশনাল):</label>
        <input class="form-control" type="file" name="notice_image"><br><br>

        <button class="btn btn-sm btn-success" type="submit">আপডেট করুন</button>
    </form>
@endsection