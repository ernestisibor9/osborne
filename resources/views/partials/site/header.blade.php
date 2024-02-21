     <header class="header-section">
            <div class="topper">
                <div class="top-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="header-left-bar">
                                    <ul class="contact-wrapper">
                                        <li><i class="fa fa-envelope" aria-hidden="true"></i> info@ocmlng.com</li>
                                        <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                        0201-2914775</li>
                                    </ul>
                                </div> <!-- header-left-bar -->
                            </div>

                            <div class="col-md-4">
                                <div class="header-right-bar text-right">
                                    

                                    <!--<div class="social-icon pull-right">-->
                                    <!--    <ul>-->
                                    <!--        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
                                    <!--        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
                                    <!--        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>-->
                                    <!--        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
                                    <!--        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>-->
                                    <!--    </ul>-->
                                    <!--</div>-->
                                </div> <!-- header-right-bar -->
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- topper -->

            <nav class="navbar navbar-inverse hidden-sm hidden-xs">
                <div class="navbar-inner">
                    <div class="container">
                        <div class="navbar-header">
                            <a class="navbar-brand"  style="width: 340px" href="/"><img src="{{ asset('site/assets/images/logo.png') }}" style="width: 100%; height: auto;" alt="image"></a>
                        </div>

                        <div class="collapse navbar-collapse navbar-right">
                            <ul class="nav navbar-nav">
                                <li class="active dropdown"><a href="/">Home</a>

                                </li>

                                <li class="dropdown">
                                    <a href="{{ route('about.home-page') }}">
                                        About us
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/company-profile">Company Profile</a></li>
                                        <!--<li><a href="/company-policy">Company Policies</a></li>-->
                                        <li><a href="{{ route('about.director-page') }}">Board Of Directors</a></li>
                                        <li><a href="{{ route('about.management-page') }}">Management</a></li>
                                        <li><a href="/core-values">Core Values </a></li>
                                    </ul>
                                </li>
                                
                                 <li class="dropdown">
                                    <a href="#">
                                        Services
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <!--<li><a href="{{ route('osborn-service.all-service') }}">All Services</a></li>-->
                                        <li><a href="/services-chain/3">Financial Advisory</a></li>
                                        <li><a href="/services-chain/4">Securities Trading</a></li>
                                        <li><a href="/services-chain/7">Investment Banking</a></li>
                                        <li><a href="/services-chain/8">Wealth Management</a></li>
                                     </ul>
                                </li>

                            
                              <li class="dropdown">
                                  <a href="#"> 
                                  Account Opening
                                  <i class="fa fa-angle-down" aria-hidden="true"></i>
                                  </a>
                                  
                                  <ul class="dropdown-menu">
                                      <li><a href="https://www.ocmlngonline.com/iw/NewAccount/Index">Account Opening</a></li>
                                      <!--<li><a href="/accountopening-individual-form">Individual</a></li>-->
                                      <!--<li><a href="/accountopening-corporate-form">Corporate</a></li>-->
                                      <!--<li><a href="{{ route('pdf-download.downloads') }}">Account Opening Forms</a></li>-->
                                  </ul>
                              </li>
                              <li class="dropdown">
                                  <a href="#"> 
                                  Research
                                  <i class="fa fa-angle-down" aria-hidden="true"></i>
                                  </a>
                                  
                                  <ul class="dropdown-menu w-100">
                                      <li><a href="/ngx-daily-price-list">NGX Daily Market Report</a></li>
                                      <li><a href="/corporate-action-display">Corporate Action</a></li>
                                      <li><a href="/company-financial-report-display">Financial Report</a></li>
                                      
                                  </ul>
                              </li>
                            
                                <li>
                                    <a href="https://www.ocmlngonline.com/iw">
                                        Client Portal
                                    </a>
                                </li>
                                <!--<li>-->
                                <!--    <a href="{{ route('register') }}">-->
                                <!--        register-->
                                <!--    </a>-->
                                <!--</li>-->
                                <!--<li><a href="{{ route('contact-us') }}">Contact</a></li>-->
                                 <li><a href="{{ route('pdf-download.downloads') }}"> Downloads</a></li>


                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header> <!-- header-section -->
