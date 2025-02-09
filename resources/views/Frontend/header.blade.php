<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>নিবরাস স্কুল</title>
    <link rel="shortcut icon" href="{{asset('frontend/img/nibras_logo.jpg')}}" type="image/x-icon">

    <!-- CSS Links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&family=Noto+Sans+Bengali:wght@100..900&family=Noto+Serif+Bengali:wght@100..900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{asset('frontend/css/styles-merged.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/all_inline.css')}}">

    <style>
       
    </style>
  </head>

  <body>
    
    <div class="probootstrap-page-wrapper">
      <!-- Fixed navbar -->
      
      <div class="probootstrap-header-top">
        <div class="container">
          <div class="row">
            <div style="margin-top: 15px;font-size:16px;" class="col-lg-9 col-md-9 col-sm-9 probootstrap-top-quick-contact-info">
              <span><i class="icon-location2"></i><b>কাশীপুর ঢালিবাড়ী, ফতুল্লা, নারায়নগঞ্জ</b></span>
              <span><i class="icon-phone2"></i><b>+8801780-711678</b></span>
              <span><i class="icon-mail"></i><b>nibrasschool2024@gmail.com</b></span>
            </div>
            
          </div>
        </div>
      </div>

      <nav class="navbar navbar-default probootstrap-navbar">
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

            <!-- লোগো বসানোর জন্য নিচের অংশ পরিবর্তন -->
            <a class="navbar-brand" href="index.html">
              <img src="{{asset('frontend/img/nibras_logo.jpg')}}" alt="নিবরাস স্কুল" style="width: 50px; height:50px;">
            </a>
          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="{{route('front')}}">হোম</a></li>
              <li><a href="{{route('see_page.teachers')}}">শিক্ষকসমূহ</a></li>
              <li><a href="#">যোগাযোগ</a></li>
               @auth
                  <li><a href="{{ route('back') }}">Dashboard</a></li>
              @else
                  <li><a href="{{ route('login') }}">Admin Login</a></li>
              @endauth
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
                    <h1 class="probootstrap-heading probootstrap-animate">শিক্ষার্থীদের উজ্জ্বল ভবিষ্যৎ গড়ে তোলাই আমাদের লক্ষ্য</h1>
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
                    নিবরাস একটি আধুনিক মান সম্মত ইসলামি শরিয়াহ মোতাবেক স্কুল। এখানে ইলমে দ্বীন এবং প্রচলিত ধারার শিক্ষা দেয়া হয়। আমাদের আছেন অভিজ্ঞ শিক্ষক, যারা হাতে ধরে আমাদের প্রিয় শিক্ষার্থীদের পাঠদান করে থাকেন।
                  </p>
                 
                   <button type="button" class="btn btn-outline-dark btn-primary" data-toggle="modal" data-target="#admissionModal">
                          ভর্তির জন্য আবেদন করুন
                    </button>

                </div>
                <div class="probootstrap-image probootstrap-animate" style="background-image: url({{asset('frontend/img/header_first.jpg')}}">
                  <a href="#"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

