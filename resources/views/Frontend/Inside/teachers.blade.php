@include('Frontend.header')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4 class="text-center mb-5"><b>{{__('সকল শিক্ষক দের তালিকা দেখুন')}}</b></h4>
        </div>
        <div class="col-md-12">
            <table style="margin-top: 50px;margin-bottom:70px;" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>সিরিয়াল নং</th>
                        <th>শিক্ষকের নাম</th>
                        <th>শিক্ষকের ছবি</th>
                        <th>শিক্ষকের পদবী</th>
                        <th>ফোন নাম্বার</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($all_teachers as $key => $teacher)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$teacher->teacher_name}}</td>
                        <td>
                            @if($teacher->teacher_image)
                            <img src="{{asset('storage/Teachers/'. $teacher->teacher_image)}}" alt="teacher image here" width="120px;">
                            @else
                            <td>কোন ছবি নেই</td>
                            @endif
                        </td>
                        <td>{{$teacher->designation}}</td>
                        <td>{{$teacher->phone_number}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@include('Frontend.footer')