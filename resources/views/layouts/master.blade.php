<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link href="{{asset('media/logo/logo.jpg')}}" rel="icon">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('title')
  </title>
  {{-- <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' /> --}}
  <meta content='width=device-width, initial-scale=1.0' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/now-ui-dashboard.css?v=1.3.0')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('assets/demo/demo.css')}}" rel="stylesheet" />
  
</head>

<body class="">
  <div id="overlay">

    <div class="spinner">
    
    </div>
  </div>
  <div class="wrapper ">

    {{-- sidebar --}}
    <div class="sidebar" data-color="yellow">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
        <div class="logo">
          <a href="{{URL('home')}}" class="simple-text logo-mini">
            <img src="{{asset('media/logo/logo.jpg')}}" style="border-radius: 100%">
          </a>
          <a href="{{URL('home')}}" class="simple-text logo-normal">
            FIRE MANAGEMENT
          </a>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
          <ul class="nav">
            <li>
              <a href="{{URL('home')}}">
                <i class="now-ui-icons design_app"></i>
                <p>Dashboard</p>
              </a>
            </li>
            
            <li>
              <a href="{{URL('logistics')}}">
                <i class="now-ui-icons files_paper"></i>
                <p>Logistics</p>
              </a>
            </li>
            <li>
              <a href="{{URL('resource_used')}}">
                <i class="now-ui-icons files_paper"></i>
                <p>Resource Used</p>
              </a>
            </li>
             <li>
              <a href="{{URL('fire_alert_info')}}">
                <i class="now-ui-icons location_world"></i>
                <p>Client FIre Location</p>
              </a>
            </li>
            <li>
              <a href="{{URL('usermap')}}">
                <i class="now-ui-icons location_pin"></i>
                <p>Maps</p>
              </a>
            </li>
            
          </ul>
        </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            @yield('heading')
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            @yield('form')
          
            <ul class="navbar-nav">
              @inject('count','App\Http\Controllers\Controller')
              <li class="nav-item">
                <a class="nav-link" href="{{url('fire_alert_info')}}">
                  <i class="now-ui-icons travel_info">
                    <sup style="vertical-align: super; font-size: small; "><div class="numberCircle">{{count($count->data())}}</div></sup></i>
                  <p>
                    <span class="d-lg-none d-md-block">Notifications : {{count($count->data())}}</span>
                  </p>
                </a>
              </li>

              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="now-ui-icons users_single-02"></i>
                    {{ Auth::user()->name }}
                     {{-- <span class="caret"></span> --}}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
 
      

          @yield('content')

          @yield('pagnition')



      <footer class="footer">
        <div class="container-fluid">
          <nav>
            <ul>
              <li>
              @yield('footer')
              </li>       
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy;
            <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>,Fire Management <img src="{{asset('media/logo/logo.jpg')}}" width="40px" style="border-radius: 100%">
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>

  <script src="{{asset('assets/demo/demo.js')}}"></script>
  <script src="{{asset('assets/demo/custom.js')}}"></script>

  <!--  Google Maps Plugin    -->
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7kMDqCrPcVv4uCROO1GOev9XCDqUEAAo&callback=demo.initGoogleMaps"></script>
  <!-- Chart JS -->
  <script src="{{asset('assets/js/plugins/chartjs.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('assets/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('assets/js/now-ui-dashboard.min.js?v=1.3.0')}}" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  
  <script src="{{asset('assets/js/custom.js')}}"></script>

  


  @yield('scripts')

  @yield('map_script')

</body>

</html>