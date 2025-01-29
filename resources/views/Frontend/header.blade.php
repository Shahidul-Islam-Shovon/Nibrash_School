<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>নিবরাস স্কুল</title>
    <link rel="shortcut icon" href="{{asset('frontend/img/nibras_logo.jpg')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&family=Noto+Sans+Bengali:wght@100..900&family=Noto+Serif+Bengali:wght@100..900&display=swap" rel="stylesheet">
  
    <link rel="stylesheet" href="{{asset('frontend/css/styles-merged.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">
    <style>
         
          body{
            font-family: 'Noto Serif Bengali';
            font-weight: 600;
            color: rgba(0, 0, 0, 0.849)
          }
          body p span{
            font-size: 17.5px;
          }
          .navbar-brand::before {
            display: none;
          }
          .navbar-brand img {
            display: block;
            max-height: 40px;
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
        .swal2-popup {
        font-size: 18px !important; /* ফন্ট বড় করবে */
        }
        .swal2-title {
            font-size: 22px !important; /* শিরোনামের ফন্ট বড় করবে */
        }
        .swal2-content {
            font-size: 18px !important; /* মেসেজের ফন্ট বড় করবে */
        }
        .swal2-confirm {
            font-size: 16px !important; /* বাটনের ফন্ট বড় করবে */
            padding: 10px 20px !important;
        }
        .card {
          border: 1px solid #ddd;
          padding: 15px;
          margin: 10px;
          border-radius: 10px;
          background-color: #ffffff;
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .card img {
          border-radius: 8px;
        }
        html {
        scroll-behavior: smooth;
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
              <li><a href="events.html">যোগাযোগ</a></li>
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

