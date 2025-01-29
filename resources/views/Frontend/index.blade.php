@include('Frontend.header')

      <section class="probootstrap-section" id="probootstrap-counter">
        <div class="container">
          
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-users2"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="50" data-speed="5000" data-refresh-interval="50">1</span>
                  </span>
                  <span class="probootstrap-counter-label">ছাত্র-ছাত্রীর সংখ্যা</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-user-tie"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="10" data-speed="5000" data-refresh-interval="50">1</span>
                  </span>
                  <span class="probootstrap-counter-label">দক্ষ শিক্ষক</span>
                </div>
              </div>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-library"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="100" data-speed="5000" data-refresh-interval="50">1</span>%
                  </span>
                  <span class="probootstrap-counter-label">পাশের হার</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
               
               <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-smile2"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="100" data-speed="5000" data-refresh-interval="50">1</span>%
                  </span>
                  <span class="probootstrap-counter-label">অভিভাবকদের সন্তুষ্টি</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-section-colored probootstrap-bg probootstrap-custom-heading probootstrap-tab-section" style="background-image: url(img/slider_2.jpg)">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center section-heading probootstrap-animate">
              <h2 class="mb0">আমাদের কার্যক্রম</h2>
              <br>
              <h4 style="color:white" class="col-md-12 text-center section-heading probootstrap-animate">নোটিশ বোর্ড এবং ইভেন্ট'স সমূহ</h4>
            </div>
          </div>
        </div>
        <div class="probootstrap-tab-style-1">
          <ul class="nav nav-tabs probootstrap-center probootstrap-tabs no-border">
            <li class="active"><a data-toggle="tab" href="#featured-news">নোটিশ বোর্ড</a></li>
            <li><a data-toggle="tab" href="#upcoming-events">ইভেন্ট'স সমূহ </a></li>
          </ul>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="tab-content">
                <div id="featured-news" class="tab-pane fade in active">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="owl-carousel" id="owl1">
                        {{-- start item --}}

                        @foreach($all_notice as $notice)
                        <div class="card">
                        
                            <figure class="probootstrap-media"><img src="{{asset('storage/Images/'.$notice->notice_image)}}" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>

                            <div class="card-body">
                              <div class="">
                                <p style="font-size: 21px;margin-top:20px;">{{$notice->notice_headline}}</p>
                              <p>{{ Str::limit($notice->notice, 60)}}</p>

                              <a href="{{ route('see_page.notices.single', encrypt($notice->id), $notice->id)}}#notice-section" class="text-blue-500 mt-2 block"><button style="margin-bottom:20px;" class="btn btn-primary">বিস্তারিত দেখুন</button></a>

                              <span class="probootstrap-date">প্রকাশিতঃ <i class="icon-calendar"></i>{{ \Carbon\Carbon::parse($notice->created_at)->translatedFormat('d F, Y') }} তারিখে</span>
                              </div>                           
                            </div>                         
                        </div>
                        @endforeach
                        <!-- END item -->                        
                      </div>
                    </div>
                  </div>                 
                </div>

                <div id="upcoming-events" class="tab-pane fade">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="owl-carousel" id="owl2">
                        {{-- start item --}}
                      
                        @foreach($all_events as $event)
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="{{asset('storage/Events/'. $event->event_image)}}" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>

                            <div class="probootstrap-text">
                              <h3><b>{{$event->event_headline}}</b></h3>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>{{ \Carbon\Carbon::parse($event->created_at)->translatedFormat('d F, Y') }}</span>
                            </div>
                          </a>
                        </div>
                        @endforeach
                        <!-- END item -->                      
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <p><a href="#" class="btn btn-primary">সকল ইভেন্ট দেখুন</a></p>  
                    </div>
                  </div>
                </div>

              </div>
            
            </div>
          </div>
        </div>
      </section>

    
        <section id="jabbar" class="probootstrap-section probootstrap-bg-white probootstrap-border-top">
    <div class="container">
        <div class="row justify-content-center"> <!-- Centering the row -->
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                <h3>যে শ্রেণীতে আমাদের ভর্তি চলমান</h3>
                <p class="lead">প্লে থেকে ৫ম শ্রেণী পর্যন্ত আমরা যত্ন সহকারে শিক্ষার্থীদের পরিয়ে থাকি</p>
            </div>
        </div>

        <div class="row justify-content-center"> <!-- Centering all cards -->
            <!-- Play -->
            <div class="col-md-4 d-flex justify-content-center">
                <div class="probootstrap-service-2 probootstrap-animate">
                    <div class="text">
                        <h3><b>প্লে</b></h3>
                        <p>প্লে তে আমাদের শিশু শিক্ষার্থীরা রয়েছে</p>
                        
                    </div>
                </div>
            </div>

            <!-- Nursery -->
            <div class="col-md-4 d-flex justify-content-center">
                <div class="probootstrap-service-2 probootstrap-animate">
                    <div class="text">
                        <h3><b>নার্সারি</b></h3>
                        <p>নার্সারির বাচ্চাদের মনযোগ দিয়ে পরানো হয়</p>
                       
                    </div>
                </div>
            </div>

            <!-- First Grade -->
            <div class="col-md-4 d-flex justify-content-center">
                <div class="probootstrap-service-2 probootstrap-animate">
                    <div class="text">
                        <h3><b>প্রথম</b></h3>
                        <p>প্রথম শ্রেণীতে আমরা বাচ্চাদের ইলমে দ্বীন এর শিক্ষা দেয়া শুরু করি</p>                      
                    </div>
                </div>
            </div>

            <!-- Second Grade -->
            <div class="col-md-4 d-flex justify-content-center">
                <div class="probootstrap-service-2 probootstrap-animate">
                    <div class="text">
                        <h3><b>দ্বিতীয়</b></h3>
                        <p>যত উপরের ক্লাস এ যাবে তত ভাল শিক্ষায় শিক্ষিত হবে আমাদের শিক্ষার্থীরা</p>
                        
                    </div>
                </div>
            </div>

            <!-- Third Grade -->
            <div class="col-md-4 d-flex justify-content-center">
                <div class="probootstrap-service-2 probootstrap-animate">
                    <div class="text">
                        <h3><b>তৃতীয়</b></h3>
                        <p>আমরা চেস্টা করি ৩য় শ্রেণী থেকে বাচ্চাদের পড়ালেখার দক্ষতা আরও বৃদ্ধি করার</p>
                       
                    </div>
                </div>
            </div>

            <!-- Fourth Grade -->
            <div class="col-md-4 d-flex justify-content-center">
                <div class="probootstrap-service-2 probootstrap-animate">
                    <div class="text">
                        <h3><b>চতুর্থ</b></h3>
                        <p>চতুর্থ শ্রেণী তে আমাদের অনেক ভাল ভাল শিক্ষার্থীরা রয়েছে</p>
                      
                    </div>
                </div>
            </div>

            <!-- Fifth Grade -->
            <div class="col-md-4 d-flex justify-content-center">
                <div class="probootstrap-service-2 probootstrap-animate">
                    <div class="text">
                        <h3><b>পঞ্চম</b></h3>
                        <p>পঞ্চম শ্রেণী তে চলে আসা মানে প্রাথমিক শিক্ষা জীবনের ইতি ঘটা</p>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


 
      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>পরিচিত হোন আমাদের অভিজ্ঞ শিক্ষকদের সাথে</h2>
              <p class="lead">আমাদের আছে একঝাক দক্ষ তরুন শিক্ষক যারা অতি যত্ন সহকারে আমাদের শিক্ষার্থীদের পাঠদান করে থাকেন</p>
            </div>
          </div>
          <!-- END row -->

          <div class="row">
            @foreach($all_teachers as $teacher)
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">

                <figure class="media">
                  <img src="{{asset('storage/Teachers/'. $teacher->teacher_image)}}" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive" width="400" height="400">
                </figure>

                <div class="text">
                  <h3 style="font-size: 17px;">{{$teacher->teacher_name}}</h3>
                  <p>{{$teacher->designation}}</p>
                  <ul class="probootstrap-footer-social">
                    
                    <li class="facebook"><a href="{{$teacher->facebook_link}}">ফেইসবুকঃ<i class="icon-facebook2"></i></a></li>
                    
                  </ul>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          
        </div>
      </section>


      <section class="probootstrap-section probootstrap-bg probootstrap-section-colored probootstrap-testimonial" style="background-image: url(img/slider_4.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>আমাদের খুজে বের করুন গুগল ম্যাপ এ !</h2>
              <p class="lead">গুগল ম্যাপ ব্যাবহার করে চলে আসুন আমাদের সুন্দর বিদ্যালয়ে</p>
            </div>
          </div>

          <!-- END row -->
          <div class="row text-center">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d467959.9212256694!2d89.90860877343746!3d23.60659640000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b1002f6bb9b5%3A0x81a04218c354c0b!2sNibras%2Can%20islami%20modern%20school!5e0!3m2!1sen!2sbd!4v1737972722727!5m2!1sen!2sbd" 
            width="100%" 
            height="500" 
            style="border:0; filter: brightness(1.2) contrast(1.1); opacity: 0.95;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>

          <!-- END row -->

        </div>
      </section>


      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h3>কেন নিবরাস স্কুল পছন্দ করবেন ?</h3>
              <p class="lead">আমাদের কিছু সেরা দিকগুলু হচ্ছে - </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>দ্বীনি ও আধুনিক শিক্ষার সমন্বয়</h3>
                  <p>কুরআন, হাদিস ও ইসলামিক স্টাডিজের পাশাপাশি বিজ্ঞান, গণিত ও ভাষা শেখানো হয় পাশাপাশি
                  কুরআন, হাদিস ও ইসলামিক স্টাডিজ, বিজ্ঞান, গণিত ও ভাষা শেখানো হয়</p>
                </div>  
              </div>
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>যোগ্য ও অভিজ্ঞ শিক্ষক মণ্ডলী</h3>
                  <p>ইসলামি ও আধুনিক শিক্ষায় পারদর্শী শিক্ষকরা পাঠদান করেন সেই সাথে
                  আদর্শ ও নৈতিক শিক্ষায় গুরুত্ব প্রদান করা হয়</p>
                </div>
              </div>
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>আধুনিক প্রযুক্তিনির্ভর শিক্ষা</h3>
                  <p> ডিজিটাল পাঠদান ব্যবস্থা ও 
                  ভাল পাঠদানের সুবিধা রয়েছে</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>উন্নত ও নিরাপদ পরিবেশ</h3>
                  <p>শিশুদের জন্য নিরাপদ ও অনুকূল শিক্ষা পরিবেশ এবং
                  শৃঙ্খলা ও নৈতিকতার উপর বিশেষ গুরুত্ব</p>
                </div>  
              </div>
              
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>সহশিক্ষা কার্যক্রম</h3>
                  <p>বিতর্ক, খেলাধুলা, হিফজ ও নাশিদ প্রতিযোগিতার আয়োজন
                  নেতৃত্ব ও আত্মবিশ্বাস গড়ে তোলার সুযোগ</p>
                </div>
              </div>
              
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>সুন্দর ক্যাম্পাস ও সুব্যবস্থাপনা</h3>
                  <p>প্রশস্ত ও পরিপাটি ক্যাম্পাস, স্বতন্ত্র নামাজের জায়গা
                  </p>
                </div>   
              </div>

            </div>
          </div>
          <!-- END row -->
        </div>
      </section>
      
@include('Frontend.footer')