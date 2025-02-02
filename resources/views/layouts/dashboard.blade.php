<!doctype html>
<html lang="bn">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <!-- DataTables CSS -->
 <link rel="stylesheet" href="https://cdn.datatables.net/2.2.1/css/dataTables.dataTables.css" />

  <link rel="shortcut icon" type="image/png" href="{{asset('backend/images/logos/logos.jpg')}}" />

  <link rel="stylesheet" href="{{asset('backend/css/styles.min.css')}}" />
    <style>
            body {
            font-family: 'Noto Sans Bengali', sans-serif;
          }
          .action-buttons {
            display: flex; /* আইকন গুলো এক লাইনে রাখবে */
            gap: 5px; /* আইকন গুলোর মধ্যে 5px দূরত্ব থাকবে */
          }
          .add-notice-btn {
            float: right; /* ডান পাশে সরিয়ে আনবে */
            margin-top: -5px; /* নিচে কিছু জায়গা দিবে */
            
        }
        div.dt-container {
            position: relative;
            clear: both;
            margin-top: 60px;
        }
        .alert-dismissible{
          margin-top: 28px;
        }
    </style>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="{{url('/admin/dashboard')}}" class="text-nowrap logo-img">
            <img src="{{asset('backend/images/logos/logos.jpg')}}" width="130" style="margin-top: 10px;" alt="nibras logo here" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('/admin/dashboard')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">ড্যাসবোর্ড</span>
              </a>
              
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('/')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">সাইট ভিজিট</span>
              </a>
            </li>

            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Contents</span>
            </li>

            {{-- menu copy --}}
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('featured_news.form') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">নোটিশ এড</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('events.show.form')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">আপকামিং ইভেন্টস</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('enrollments.index')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">এনরোল করা শিক্ষার্থীরা</span>
              </a>
            </li>

            {{-- menu copy end --}}
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('teacher.create')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">শিক্ষক এড করুন</span>
              </a>
            </li>
            {{-- menu copy end --}}
     
          </ul>       
        </nav>
        <!-- End Sidebar navigation -->

      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->


    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
 

          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="{{asset('backend/images/profile/user-1.jpg')}}" alt="" width="35" height="35" class="rounded-circle">
                </a>

                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">

                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                   
                
                    {{-- logout feature --}}
                
                    <a class="dropdown-item btn btn-outline-primary mx-3 mt-2 d-block" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                      </form>

                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->


      {{-- main yeild --}}
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            @yield('content')
          </div>
        </div>
      </div>
    {{-- mian end --}}

    </div>
  </div>


  <script src="{{asset('backend/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('backend/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('backend/js/sidebarmenu.js')}}"></script>
  <script src="{{asset('backend/js/app.min.js')}}"></script>
  <script src="{{asset('backend/libs/simplebar/dist/simplebar.js')}}"></script>

  <script src="https://cdn.datatables.net/2.2.1/js/dataTables.js"></script>

  <script>
      $(document).ready( function () {
        $('#myTable').DataTable();
      });
  </script>

  @yield('custom_js')


</body>
</html>

