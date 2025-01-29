@extends('layouts.dashboard')


@section('title')
Add Featured News
@endsection


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!-- Add Notice Button -->
            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addNoticeModal">
                <i class="fa fa-plus"></i> নোটিশ এড করুন
            </button>

            <h4>সকল নোটিশ দেখুন</h4>

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

            <!-- Notice Table -->
            <table id="myTable" class="table table-striped">
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
                    @foreach ($show_notice as $key => $notice)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $notice->notice_headline }}</td>
                            <td>{{ Str::limit($notice->notice), 80 }}</td>
                            <td>
                                @if ($notice->notice_image)
                                    <img src="{{ asset('storage/Images/'.$notice->notice_image) }}" width="70">
                                @else
                                    <span>কোনো ছবি নেই</span>
                                @endif
                            </td>
                            <td>{{ $notice->created_at->format('d M, Y') }}</td>
                            <td>
                                <a href="{{ route('featured_news.edit', encrypt($notice->id),$notice->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
                                
                                <form action="{{ route('notice.destroy', encrypt($notice->id),$notice->id) }}" method="POST" class="d-inline">
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

            <!-- Pagination -->
            {{ $show_notice->links() }}

        </div>
    </div>
</div>

<!-- Add Notice Modal -->
<div class="modal fade @if ($errors->any()) show d-block @endif" id="addNoticeModal" tabindex="-1" aria-labelledby="addNoticeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNoticeModalLabel">নতুন নোটিশ যোগ করুন</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('featured_news.insert')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="">ছবি সিলেক্ট করুন</label>
                    <input type="file" name="notice_image" class="form-control">
                    @error('notice_image')
                        <strong class="text-danger">{{$message}}</strong>
                    @enderror
                    <br>

                    <label for="">নোটিশ এর শিরোনাম</label>
                    <input type="text" name="notice_headline" class="form-control" value="{{ old('notice_headline') }}">
                    @error('notice_headline')
                        <strong class="text-danger">{{$message}}</strong>
                    @enderror
                    <br>

                    <label for="">নোটিশ টি লিখুন</label><br>
                    <textarea class="form-control" name="notice" cols="10" rows="5">{{ old('notice') }}</textarea>
                    @error('notice')
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
            var myModal = new bootstrap.Modal(document.getElementById('addNoticeModal'));
            myModal.show();
        });
    </script>
@endif

@endsection