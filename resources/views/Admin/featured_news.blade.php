@extends('layouts.dashboard')


@section('title')
Add Featured News
@endsection


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4>নোটিশ এড করুন</h4>
            
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>              
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li><br>
                    @endforeach
                </ul>
            </div>
        @endif
        <br>
            <form action="{{route('featured_news.insert')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="">ছবি সিলেক্ট করুন</label>
                <input type="file" name="notice_image" class="form-control">
                @error('notice_image')
                
                    <strong class="text-danger">
                        {{$message}}
                    </strong>
                @enderror
                <br>
                <label for="">নোটিশ এর শিরোনাম</label>
                <input type="text" name="notice_headline" class="form-control">
                
                <br>
                <label for="">নোটিশ টি লিখুন</label><br>
                <textarea class="form-control" name="notice" id="" cols="10" rows="5"></textarea>
                <br>

                <input type="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>


<hr>
 
<h4>সকল নোটিশ দেখুন</h4>

<table id="noticeTable" class="table table-striped display">
    <thead>
        <tr>
            <th>#</th>
            <th>শিরোনাম</th>
            <th>বিবরণ</th>
            <th>ছবি</th>
            <th>তারিখ</th>
            <th>একশন</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($show_notice as $key => $notice)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$notice->notice_headline}}</td>
                <td>{{$notice->notice}}</td>
                <td>
                    @if ($notice->notice_image)
                        <img src="{{ asset('storage/Images/'.$notice->notice_image) }}" width="100">
                    @else
                        <span>কোনো ছবি নেই</span>
                    @endif
                </td>
                <td>{{ $notice->created_at->format('d M, Y') }}</td>
                <td>
                    <button class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">আপাতত কোন নোটিশ নেই !</td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection