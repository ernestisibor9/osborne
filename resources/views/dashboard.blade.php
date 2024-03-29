{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
 --}}



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="{{ asset('vendors/images/favicon.ico') }}" type="image/ico" />

    <title>
      @yield('title')
    </title>

    <!-- Bootstrap -->
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <!-- <link href="{{ asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet"> -->
    <!-- iCheck -->
    <!-- <link href="{{ asset('vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet"> -->

    <!-- bootstrap-progressbar -->
    <!-- <link href="{{ asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet"> -->
    <!-- JQVMap -->
    <!-- <link href="{{ asset('vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/> -->
    <!-- bootstrap-daterangepicker -->
    <!-- <link href="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet"> -->

    <!-- Custom Theme Style -->
    <link href="{{ asset('vendors/build/css/custom.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/build/css/custom.css') }}" rel="stylesheet">



  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/dash" class="site_title">
                <img src="{{ asset('vendors/images/admin-logo.png') }}" alt="">
              </a>
            </div>
            <div class="clearfix"></div>
            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General<a href="{{ route('admin-dashboard.dashboard') }}"><i class="fa fa-user"></i> Dashboard <span class="fa fa-chevron-down"></span></a></h3>
                <ul class="nav side-menu">

                    <ul class="nav child_menu">
                      <li><a href="">Add Teams</a></li>
                      <li><a href="#">View Teams</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-user"></i> Users <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('admin-dashboard.register') }}">Add User</a></li>
                      <li><a href="{{ route('admin-dashboard.index') }}">View Users</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-upload"></i> Upload CSV <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      {{-- <li><a href="{{ route('upload-files.top-gain') }}">Top Gainers</a></li> --}}
                      <li><a href="{{ route('upload-files.top-gain') }}">Top Loosers </a></li>
                      {{-- <li><a href="#">Market Summary </a></li> --}}
                    </ul>
                  </li>
                  <li><a><i class="fa fa-users"></i> Teams <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="">Add Teams</a></li>
                      <li><a href="#">View Teams</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-wrench"></i> Services <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Add Service</a></li>
                      <li><a href="#">View Service</a></li>
                    </ul>
                  </li>

                   <li><a><i class="fa fa-pencil-square-o"></i>News Category<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('category.create') }}">Add News</a></li>
                      <li><a href="{{ route('category.index') }}">View News</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-pencil-square-o"></i> Market News <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('market-news.create') }}">Add News</a></li>
                      <li><a href="{{ route('market-news.index') }}">View News</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">



                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item" ><i class="fa fa-sign-out pull-right"></i>Logout</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                      </form>
                    {{-- <a  class="dropdown-item"  ><i class="fa fa-sign-out pull-right"></i> Log Out</a> --}}
                  </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="{{ asset('vendors/images/img.jpg') }}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="{{ asset('vendors/images/img.jpg') }}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          @yield('content')

        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
             <?php echo date('Y') ?>All Rights Reserved by Osborne Capital Markets Limited <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- FastClick -->
    <!-- <script src="{{ asset('vendors/fastclick/lib/fastclick.js') }}"></script> -->
    <!-- NProgress -->
    <!-- <script src="{{ asset('vendors/nprogress/nprogress.js') }}"></script> -->
    <!-- Chart.js -->
    <!-- <script src="{{ asset('vendors/Chart.js/dist/Chart.min.js') }}"></script> -->
    <!-- gauge.js -->
    <!-- <script src="{{ asset('vendors/gauge.js/dist/gauge.min.js') }}"></script> -->
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <!-- iCheck -->
    <!-- <script src="{{ asset('vendors/iCheck/icheck.min.js') }}"></script> -->
    <!-- Skycons -->
    <!-- <script src="{{ asset('vendors/skycons/skycons.js') }}"></script> -->
    <!-- Flot -->
    <!-- <script src="{{ asset('vendors/Flot/jquery.flot.js') }}"></script> -->
    <!-- <script src="{{ asset('vendors/Flot/jquery.flot.pie.js') }}"></script> -->
    <!-- <script src="{{ asset('vendors/Flot/jquery.flot.time.js') }}"></script> -->
    <!-- <script src="{{ asset('vendors/Flot/jquery.flot.stack.js') }}"></script> -->
    <!-- <script src="{{ asset('vendors/Flot/jquery.flot.resize.js') }}"></script> -->
    <!-- Flot plugins -->
    <!-- <script src="{{ asset('vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script> -->
    <!-- <script src="{{ asset('vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script> -->
    <!-- <script src="{{ asset('vendors/flot.curvedlines/curvedLines.js') }}"></script> -->
    <!-- DateJS -->
    <!-- <script src="{{ asset('vendors/DateJS/build/date.js') }}"></script> -->
    <!-- JQVMap -->
    <!-- <script src="{{ asset('vendors/jqvmap/dist/jquery.vmap.js') }}"></script> -->
    <!-- <script src="{{ asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script> -->
    <!-- <script src="{{ asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script> -->
    <!-- bootstrap-daterangepicker -->
    <!-- <script src="{{ asset('vendors/moment/min/moment.min.js') }}"></script> -->
    <!-- <script src="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script> -->
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('vendors/build/js/custom.min.js') }}"></script>
  </body>
</html>

