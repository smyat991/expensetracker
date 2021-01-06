<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
     Expense Tracker
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{ asset('frontend_assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('frontend_assets/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          Expense Tracker
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active">
            <a href="{{route('home1')}}">
              <i class="nc-icon nc-bank" style="color:white;"></i>
              <p style="color:white;">Home</p>
            </a>
          </li>

          <li>
            <a href="./user.html">
              <i class="nc-icon nc-single-02" style="color:white;"></i>
              <p style="color:white;">User Profile</p>
            </a>
          </li>
          <li>
            <a href="{{route('expense_list.index')}}">
              <i class="nc-icon nc-money-coins" style="color:white;"></i>
              <p style="color:white;">Expense Record</p>
            </a>
          </li>
          <li>
            <a href="">
              <i class="nc-icon nc-money-coins" style="color:#ffffff;"></i>
              <p style="color:#ffffff;">Income Record</p>
            </a>
          </li>
<<<<<<< HEAD
=======


          <li>
            <a href="">
              <i class="nc-icon nc-tile-56" style="color:white;"></i>
              <p style="color:white;">Custom Category</p>
            </a>
          </li>
>>>>>>> cab87dd40f5251bb56f02009080fb76fee2b6b93
          <li>
            <a href="./typography.html">
              <i class="nc-icon nc-button-power" style="color:white;"></i>
              <p style="color:white;">Logout</p>
            </a>
          </li>
          <!-- <li class="active-pro">
            <a href="./upgrade.html">
              <i class="nc-icon nc-spaceship"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid bg-secondary">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand " data-toggle="modal" data-target="#aboutModal" href="javascript:;">Expense Tracker</a>


            <div class = "modal fade" id = "aboutModal" role = "dialog" tabindex="-1">
                <div class = "modal-dialog">
                    <div class = "modal-content">
                        <div class = "modal-header">
                            <div class = "modal-title">About Us</div>
                        </div>
                        <div class = "modal-body text-center">

                            <p>
                                <i class = "fas fa-envelope"></i>
                                <i class = "fas fa-camera"></i>
                                <i class = "fab fa-facebook-square"></i>
                                <i class = "fab fa-twitter-square"></i>
                                <i class = "fab fa-google-plue-square"></i>
                            </p>
                        </div>
                        <div class = "modal-footer">
                            <button class = "btn btn-secondary" data-dismiss="modal">Exit</button>
                        </div>
                    </div>
                </div>
            </div>

          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="javascript:;">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="javascript:;">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->


  @yield('content')


   <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a href="https://www.creative-tim.com" target="_blank">Log Out</a></li>
                <li><a href="https://www.creative-tim.com/blog" target="_blank">Contact Us</a></li>
                <!-- <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li> -->
              </ul>
            </nav>
            <div class="credits ml-5">
              <span class="copyright">
                © 2021 All Rights Reserved
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <!--   Core JS Files   -->
  <script src="{{ asset('frontend_assets/js/core/jquery.min.js')}}"></script>

  <script src="{{ asset('frontend_assets/js/core/popper.min.js')}}"></script>

  <script src="{{ asset('frontend_assets/js/core/bootstrap.min.js')}}"></script>

  <script src="{{ asset('frontend_assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>

  <!--  Google Maps Plugin    -->
<!--   <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
  <!-- Chart JS -->
  <script src="{{ asset('frontend_assets/js/plugins/chartjs.min.js')}}"></script>
  <script src="{{ asset('frontend_assets/js/filterexpense.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('frontend_assets/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <!-- <script src="{{ asset('frontend_assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript')}}"></script> --><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<!--   <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script> -->
</body>
</html>
