@include('Frontend.header')

<div class="container">
    <div class="row" id="notice-section">
        <div class="col-md-12">
            <h4 class="text-center"><b>সকল নোটিশ এখানে দেখুন</b></h4>
        </div>
        <div  style="margin-top: 10px;" class="col-md-12">
           <div class="card" style="padding: 20; margin-bottom:40px;">
                <div class="card-header">
                    <h3 style="font-weight: 500;" class="text-center">{{ $single_notices->notice_headline }}</h3>
                </div>

                <div class="card-body">
                        @if(!empty($single_notices->notice_image))
                            <img style="margin: 0 auto;" src="{{ asset('storage/Images/' . $single_notices->notice_image) }}" alt="Notice Image" width="500px;">
                        @else
                            <p>কোন ছবি আপলোড করা হয় নি</p>
                        @endif

                        <p style="margin-top: 25px; text-align:justify;">{{ $single_notices->notice }}</p>
                        <br>
                        <a href="{{ route('front') }}#backToHome"><button style="margin-bottom: 10px;" class="btn btn-primary" >সকল নোটিশ এ ফিরে যান</button></a>
                </div>
           </div>
          
        </div>
    </div>
</div>

@include('Frontend.footer')