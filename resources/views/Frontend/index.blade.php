<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>নিবরাস স্কুল</title>
    <link rel="shortcut icon" href="{{asset('frontend/img/nibras_logo.jpg')}}" type="image/x-icon">
  
  

    <link rel="stylesheet" href="{{asset('frontend/css/styles-merged.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">
    <style>
          @import url('https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&family=Noto+Sans+Bengali:wght@100..900&family=Noto+Serif+Bengali:wght@100..900&display=swap');

          body{
            font-family: 'Hind Siliguri';
          }
          .probootstrap-service-2 {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            background: #f8f9fa;
            margin-bottom: 20px;
            text-align: center;
            width: 100%;
            max-width: 400px; /* প্রতিটি Card এর Width ঠিক রাখার জন্য */
        }
        .probootstrap-service-2 .text {
            text-align: center;
        }
        .btn-primary {
            border-radius: 20px;
            font-weight: bold;
        }
        #jabbar{
            margin-left: 5%;
        }
        .probootstrap-teacher{
          height: 245px;
        }

    </style>
  </head>
  <body>
    
    <div class="probootstrap-page-wrapper">
      <!-- Fixed navbar -->
      
      <div class="probootstrap-header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 probootstrap-top-quick-contact-info">
              <span><i class="icon-location2"></i>কাশীপুর ঢালিবাড়ী, ফতুল্লা, নারায়নগঞ্জ</span>
              <span><i class="icon-phone2"></i>+880-1636463884</span>
              <span><i class="icon-mail"></i>developer@gmail.com</span>
            </div>
            
          </div>
        </div>
      </div>
      <nav class="navbar probootstrap-navbar">
        <div class="container">
          <div class="navbar-header">
            <div class="btn-more js-btn-more visible-xs">
              <a href="#"><i class="icon-dots-three-vertical "></i></a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            
          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="index.html">হোম</a></li>
              <li><a href="courses.html">ক্লাস ও ভর্তি</a></li>
              <li><a href="teachers.html">শিক্ষক সমূহ</a></li>
              <li><a href="events.html">নোটিশ</a></li>
              <li><a href="contact.html">ইভেন্ট'স</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <section class="flexslider">
        <ul class="slides">
          <li style="background-image: url({{asset('frontend/img/slider_1.jpg')}})" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate">শিক্ষার্থীদের উজ্জ্বল ভবিষ্যৎ গড়ে তোলাই আমাদের মিশন</h1>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li style="background-image: url({{asset('frontend/img/slider_2.jpg')}})" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate">আমাদের শিক্ষার্থীরা নিয়ে আসে দারুন সব সাফল্য</h1>
                  </div>
                </div>
              </div>
            </div>
            
          </li>
          <li style="background-image: url({{asset('frontend/img/slider_3.jpg')}})" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate">সবাই মিলে আমরা পড়ালেখা করি আনন্দের সাথে</h1>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </section>
      
      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h2>নিবরাস স্কুল এর ওয়েবসাইটে আপনাদের স্বাগতম</h2>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="probootstrap-flex-block">
                <div class="probootstrap-text probootstrap-animate">
                  <h3>স্কুল সম্পর্কে</h3>
                  <p>
                    নিবরাস একটি আধুনিক মান সম্মত ইসলামি শরিয়াহ মোতাবেক স্কুল। এখানে ইলমে দ্বীন এবং প্রচলিত ধারার শিক্ষা দুটুই শিক্ষা দেয়া হয়। আমাদের আছেন অভিজ্ঞ শিক্ষক, যারা হাতে ধরে আমাদের প্রিয় শিক্ষার্থীদের পাঠদান করে থাকেন।
                  </p>
                  <p><a href="#" class="btn btn-primary">ভর্তির জন্য আবেদন করুন</a></p>
                </div>
                <div class="probootstrap-image probootstrap-animate" style="background-image: url({{asset('frontend/img/header_first.jpg')}}">
                  <a href="#"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

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
              <h4 style="color:white" class="col-md-12 text-center section-heading probootstrap-animate">নোটিশ বোর্ড এবং আসন্ন ইভেন্ট'স সমূহ</h4>
            </div>
          </div>
        </div>
        <div class="probootstrap-tab-style-1">
          <ul class="nav nav-tabs probootstrap-center probootstrap-tabs no-border">
            <li class="active"><a data-toggle="tab" href="#featured-news">নোটিশ বোর্ড</a></li>
            <li><a data-toggle="tab" href="#upcoming-events">আসন্ন ইভেন্ট'স </a></li>
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
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">

                            <figure class="probootstrap-media"><img src="{{asset('storage/Images/'.$notice->notice_image)}}" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>

                            <div class="probootstrap-text">
                              <h3>{{$notice->notice_headline}}</h3>
                              <p>{{$notice->notice}}</p>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>{{ \Carbon\Carbon::parse($notice->created_at)->translatedFormat('d F, Y') }}</span>
                            </div>
                          </a>
                        </div>
                        @endforeach
                        <!-- END item -->
                      </div>
                    </div>
                  </div>
                  <!-- END row -->
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <p><a href="#" class="btn btn-primary">সকল নোটিশ দেখুন</a></p>  
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
                              <h3>{{$event->event_headline}}</h3>
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
                        <p><a href="#" class="btn btn-primary">ভর্তি হোন</a> <span class="enrolled-count">জন ভর্তি আছেন</span></p>
                    </div>
                </div>
            </div>

            <!-- Nursery -->
            <div class="col-md-4 d-flex justify-content-center">
                <div class="probootstrap-service-2 probootstrap-animate">
                    <div class="text">
                        <h3><b>নার্সারি</b></h3>
                        <p>নার্সারি তে আমাদের শিশু শিক্ষার্থীরা রয়েছে</p>
                        <p><a href="#" class="btn btn-primary">ভর্তি হোন</a> <span class="enrolled-count">জন ভর্তি আছেন</span></p>
                    </div>
                </div>
            </div>

            <!-- First Grade -->
            <div class="col-md-4 d-flex justify-content-center">
                <div class="probootstrap-service-2 probootstrap-animate">
                    <div class="text">
                        <h3><b>প্রথম</b></h3>
                        <p>প্রথম শ্রেণীতে আমাদের শিক্ষার্থীরা রয়েছে</p>
                        <p><a href="#" class="btn btn-primary">ভর্তি হোন</a> <span class="enrolled-count">জন ভর্তি আছেন</span></p>
                    </div>
                </div>
            </div>

            <!-- Second Grade -->
            <div class="col-md-4 d-flex justify-content-center">
                <div class="probootstrap-service-2 probootstrap-animate">
                    <div class="text">
                        <h3><b>দ্বিতীয়</b></h3>
                        <p>দ্বিতীয় শ্রেণী তে আমাদের শিক্ষার্থীরা রয়েছে</p>
                        <p><a href="#" class="btn btn-primary">ভর্তি হোন</a> <span class="enrolled-count">জন ভর্তি আছেন</span></p>
                    </div>
                </div>
            </div>

            <!-- Third Grade -->
            <div class="col-md-4 d-flex justify-content-center">
                <div class="probootstrap-service-2 probootstrap-animate">
                    <div class="text">
                        <h3><b>তৃতীয়</b></h3>
                        <p>তৃতীয় শ্রেণী তে আমাদের শিক্ষার্থীরা রয়েছে</p>
                        <p><a href="#" class="btn btn-primary">ভর্তি হোন</a> <span class="enrolled-count">জন ভর্তি আছেন</span></p>
                    </div>
                </div>
            </div>

            <!-- Fourth Grade -->
            <div class="col-md-4 d-flex justify-content-center">
                <div class="probootstrap-service-2 probootstrap-animate">
                    <div class="text">
                        <h3><b>চতুর্থ</b></h3>
                        <p>চতুর্থ শ্রেণী তে আমাদের শিক্ষার্থীরা রয়েছে</p>
                        <p><a href="#" class="btn btn-primary">ভর্তি হোন</a> <span class="enrolled-count">জন ভর্তি আছেন</span></p>
                    </div>
                </div>
            </div>

            <!-- Fifth Grade -->
            <div class="col-md-4 d-flex justify-content-center">
                <div class="probootstrap-service-2 probootstrap-animate">
                    <div class="text">
                        <h3><b>পঞ্চম</b></h3>
                        <p>পঞ্চম শ্রেণী তে আমাদের শিক্ষার্থীরা রয়েছে</p>
                        <p><a href="#" class="btn btn-primary">ভর্তি হোন</a> <span class="enrolled-count">জন ভর্তি আছেন</span></p>
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
              <h2>কেন নিবরাস স্কুল পছন্দ করবেন ?</h2>
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
      
      {{-- due section --}}
      <section class="probootstrap-cta">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Get your admission now!</h2>
              <a href="#" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">Enroll</a>
            </div>
          </div>
        </div>
      </section>


      <footer class="probootstrap-footer probootstrap-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>স্কুল সম্পর্কে</h3>
                <p>নিবরাস একটি আধুনিক মান সম্মত ইসলামি শরিয়াহ মোতাবেক স্কুল। এখানে ইলমে দ্বীন এবং প্রচলিত ধারার শিক্ষা দুটুই শিক্ষা দেয়া হয়। আমাদের আছেন অভিজ্ঞ শিক্ষক, যারা হাতে ধরে আমাদের প্রিয় শিক্ষার্থীদের পাঠদান করে থাকেন।</p>

                <h3>সামাজিক মাধ্যমে আমরা</h3>
                <ul class="probootstrap-footer-social">
                  <li><a href="#"><i class="icon-twitter"></i></a></li>
                  <li><a href="#"><i class="icon-facebook"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-md-push-1">
              <div class="probootstrap-footer-widget">
                <h3>গুরুত্বপূর্ণ লিঙ্কস-</h3>
                <ul>
                  <li><a href="#">হোম</a></li>
                  <li><a href="#">শিক্ষকসমূহ</a></li>
                  <li><a href="#">নোটিশ</a></li>
                  <li><a href="#">ইভেন্ট'স</a></li>
                  <li><a href="#">যোগাযোগ</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>যোগাযোগ করুন</h3>
                <ul class="probootstrap-contact-info">
                  <li><i class="icon-location2"></i> <span>কাশিপুর ঢালীবাড়ি সংলগ্ন, কাশীপুর, ফতুল্লা, নারায়নগঞ্জ</span></li>
                  <li><i class="icon-mail"></i><span>developer@gmail.com</span></li>
                  <li><i class="icon-phone2"></i><span>+88016-364638-84</span></li>
                </ul>
              </div>
            </div>
           
          </div>
          <!-- END row -->
          
        </div>

        <div class="probootstrap-copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-8 text-left">
                <p>&copy; 2025 <a href="#">নিবরাস স্কুল</a>. সকল সত্ত্ব সংরক্ষিত. ডিজাইন &amp; ডেভেলোপ বাই  <a href="https://www.facebook.com/shahidulislam.khan.9279" target="__blank">Shahidul Islam Shovon</a></p>
              </div>
              <div class="col-md-4 probootstrap-back-to-top">
                <p><a href="#" class="js-backtotop">উপরে যান <i class="icon-arrow-long-up"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>

    </div>
    <!-- END wrapper -->
  
    <script src="{{asset('frontend/js/scripts.min.js')}}"></script>
    <script src="{{asset('frontend/js/main.min.js')}}"></script>
    <script src="{{asset('frontend/js/custom.js')}}"></script>

  </body>
</html>