<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="{{ asset('site/assets/images/favicon.png') }}" type="image/ico" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ route('admin-dashboard.dashboard') }}" class="site_title">
                <img src="{{ asset('vendors/images/admin-logo.png') }}" alt="">
              </a>
            </div>
            <div class="clearfix"></div>
            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <a href="{{ route('admin-dashboard.dashboard') }}"><i class="fa fa-user"></i> Dashboard <span class="fa fa-chevron-down"></span></a>
                <ul class="nav side-menu">
                  </li>


                   <li><a><i class="fa fa-users"></i> ABOUT US <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('about.create') }}">Add About</a></li>
                      <li><a href="{{ route('about.admin-page') }}">View About</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-pencil-square-o"></i>NEWS CATEGORY<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('category.create') }}">Add News</a></li>
                      <li><a href="{{ route('category.index') }}">View News</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-pencil-square-o"></i> MARKET NEWS <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('market-news.create') }}">Add News</a></li>
                      <li><a href="{{ route('market-news.index') }}">View News</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-upload"></i>ACCOUNT OPENING <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('form.index') }}">Individual Acct</a></li>
                      <li><a href="{{ route('registeration-acctForm.index') }}">Corporate Acct</a></li>
                      <!--<li><a href="#">Market Summary </a></li> -->
                    </ul>
                  </li>


                   <li><a><i class="fa fa-upload"></i>DAILY MARKET DATA<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('pdf-download.create') }}">Upload </a></li>
                      <li><a href="{{ route('daily.report') }}">Daily Market Report </a></li>
                    </ul>
                  </li>

                      <li><a><i class="fa fa-user"></i> RESEARCH <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('company_report.index') }}">Company Report</a></li>
                      <li><a href="{{ route('corporate_action.index') }}">Corporate Action</a></li>
                    </ul>
                  </li>


                  {{-- <li><a><i class="fa fa-users"></i> Team category <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('team.create') }}">Add Teams</a></li>
                      <li><a href="{{ route('team.index') }}">View Teams</a></li>
                    </ul>
                  </li> --}}
                  <li><a><i class="fa fa-users"></i>MANAGEMENT TEAM <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('team.create') }}">Add Teams</a></li>
                      <li><a href="{{ route('team.index') }}">View Teams</a></li>
                    </ul>
                  </li>




                  <li><a><i class="fa fa-wrench"></i> SERVICES CATEGORY<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('osborn-service-category.create') }}">Add category</a></li>
                      <li><a href="{{ route('osborn-service-category.index') }}">View Service </a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-wrench"></i>OSBORN SERVICES <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('osborn-service.create') }}">Add Service</a></li>
                      <li><a href="{{ route('osborn-service.index') }}">View Service</a></li>
                    </ul>
                  </li>


                  <!--<li><a><i class="fa fa-wrench"></i>OSBORN SERVICES <span class="fa fa-chevron-down"></span></a>-->
                  <!--  <ul class="nav child_menu">-->
                  <!--    <li><a href="{{ route('osborn-service.create') }}"></a></li>-->
                  <!--    <li><a href="{{ route('osborn-service.index') }}">View Service</a></li>-->
                  <!--  </ul>-->
                  <!--</li>-->


                <!--  <li><a><i class="fa fa-download"></i> PDF DOWNLOAD SECTION  <span class="fa fa-chevron-down"></span></a>-->
                <!--    <ul class="nav child_menu">-->
                <!--      <li><a href="{{ route('pdf-download.index') }}">Upload</a></li>-->
                <!--      <li><a href="#">Corporate Form</a></li>-->
                <!--    </ul>-->
                <!--</li>-->


                  <li><a><i class="fa fa-download"></i> PDF <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('pdf-download.create') }}">Upload</a></li>
                      <li><a href="{{ route('pdf-download.index') }}">View</a></li>
                    </ul>
                  </li>



                  <li><a><i class="fa fa-user"></i> USERS <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('admin-dashboard.register') }}">Add User</a></li>
                      <li><a href="{{ route('admin-dashboard.index') }}">View Users</a></li>
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
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">


                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
  </form>

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
                <li class="nav-item dropdown open" style="padding-left: 75px;">

                     <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item" ><i class="fa fa-sign-out pull-right"></i>Logout</a>

                        <form id="logout-form"  class="fa fa-sign-out pull-left" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                      </form>
                  <!--<a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">-->
                    <span class="badge bg-dark pull-right"><span class="text-white">Logout</span>
                    <!--<span class="badge bg-green fa fa-sign-out">{{ Auth::user()->name }}</span>-->

                    </span>
                  </a>
                  <!--<div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">-->
                  <!--  <a class="dropdown-item"  href="javascript:;"> Profile</a>-->
                  <!--    <a class="dropdown-item"  href="javascript:;">-->
                        <!--<span class="badge bg-red pull-right">50%</span>-->
                  <!--      <span>Settings</span>-->
                  <!--    </a>-->
                  <!--<a class="dropdown-item"  href="javascript:;">Help</a>-->
                  <!--<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item" ><i class="fa fa-sign-out pull-right"></i>Logout</a>-->

                  <!--      <form id="logout-form fa fa-sign-out pull-left" action="{{ route('logout') }}" method="POST" style="display: none;">-->
                  <!--       @csrf-->
                  <!--    </form>-->
                  <!--  {{-- <a  class="dropdown-item"  ><i class="fa fa-sign-out pull-right"></i> Log Out</a> --}}-->
                  <!--</div>-->
                </li>

                <li role="presentation" class="nav-item dropdown open">
                  <!--<a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">-->
                  <!--  <i class="fa fa-envelope-o"></i>-->
                  <!--  <span class="badge bg-green">6</span>-->
                  <!--</a>-->
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

         @include('sweet::alert')
          @yield('content')

        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
             <?php echo date('Y') ?>All Rights Reserved by Osborne Capital Markets Limited <a href=""></a>
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
  <!--  <script src="https://cdn.tiny.cloud/1/i1i6w3c7donimo1w27wuhninx2gt1pnjutchmxnynxdk4vm1/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>-->
  <!--  <script>-->
  <!--  tinymce.init({-->
  <!--    selector: 'textarea',-->
  <!--    plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',-->
  <!--    toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent numlist bullist',-->
  <!--    toolbar_mode: 'floating',-->
  <!--    block_formats: 'Paragraph=p;Header 1=h1;Header 2=h2;Header 3=h3',-->
  <!-- });-->
  <!--</script>-->
  
  <script src="https://cdn.tiny.cloud/1/bs6au1qu048pnog0s5m4f5jbdfqhbl6bx2k4cz9vnkhwhl25/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

 <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
  </script>
  </body>
</html>

