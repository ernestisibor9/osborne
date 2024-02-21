 <footer class="footer-section">
            <div class="footer-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="footer-wrapper">
                                <h3>Address</h3>
                                <ul class="location">
                                    <li style="display:flex"><i class="fa fa-home" aria-hidden="true"></i> 
                                        <div class="content">
                                            2A, Idanre Close,
                                            Off Ogun Street,
                                            Osborne Foreshore Estate,
                                            Ikoyi, Lagos.
                                        </div>
                                    </li>

                                    <li><i class="fa fa-phone" aria-hidden="true"></i> 
                                        <div class="content">
                                            0201-2914775<br>
                                            
                                        </div>
                                    </li>
                                    <li>
                                        <i class="fa fa-clock-o"></i>
                                        <div class="content">
                                           Working Hours: <br> Mon-Fri (9 am - 5 pm)
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div> <!-- footer-wrapper -->
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="footer-wrapper">
                                <h3>About</h3>
                                
                                <p>
                                    OSBORNE CAPITAL MARKETS LIMITED (OCML) is a financial services firm  registered by Securities and Exchange Commission and the Nigeria Stock Exchange limited as an Issuing House and Broker/Dealer.
                                </p>

                                <!--<ul class="social-icon">-->
                                <!--    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
                                <!--    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
                                <!--    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
                                <!--    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>-->
                                <!--    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>-->
                                <!--</ul> -->
                                <div class="ngx-logo-container">
                                    <div class="ngx-logo">
                                        <img src="{{ asset('site/assets/images/ngx-logo-footer.png') }}">
                                    </div>
                                    <div class="ngx-logo">
                                        <img src="{{ asset('site/assets/images/ndpr-logo-footer.png') }}">
                                    </div>
                                </div>
                            </div> <!-- footer-wrapper -->
                        </div>
                         <br>
                        <div class="col-md-3 col-md-offset-1 col-sm-4">
                            <div class="footer-wrapper last-wrapper">
                                <h3>Navigation</h3>

                                <ul class="wrapper-option clearfix">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="{{ route('about.home-page') }}">About Us</a></li>
                                    <li><a href="{{ route('osborn-service.service-page') }}">Services</a></li>
                                    <li><a href="{{ route('market-news.all-news') }}" target="_blank">Market News</a></li>
                                    <li><a href="{{ route('pdf-download.downloads') }}">Downloads</a></li>
                                    <li><a href="https://ocmlng.com/webmail" target="_blank">Webmail</a></li>
                                    <li><a href="{{ route('contact-us') }}">Contact</a></li>
                                </ul> <!-- wrapper-option -->

                                {{-- <ul class="wrapper-option">
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="#">Gallery two</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul> <!-- wrapper-option --> --}}
                            </div> <!-- footer-wrapper -->
                        </div>
                    </div>
                    
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 compolicy">
                            <ul class="nav nav-pills">
                              <li><a href="{{ asset('site/assets/documents/pdf/privacy_notice.pdf') }}">Privacy Policy</a></li>
                              <li><a href="{{ asset('site/assets/documents/pdf/privacy_notice.pdf') }}">Data Protection Policy</a></li>
                              <li><a href="{{ asset('site/assets/documents/pdf/consent-form.pdf') }}">Customer Consent Form</a></li>
                              <li><a href="{{ asset('site/assets/documents/pdf/Data_breach_policy.pdf') }}">Data Breach Policy</a></li>
                              <li><a href="{{ asset('site/assets/documents/pdf/data-subject-access.pdf') }}">Data Subject Access Request Policy</a></li>
                              <li><a href="{{ asset('site/assets/documents/pdf/BEST EXECUTION POLICY - OCML LTD.pdf') }}">Best Execution Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
               
            </div> <!-- footer-container -->
            


            <div class="copy-right text-center">
                <div class="container">
                    <p>&copy; <?php echo date('Y') ?>  All Rights Reserved by <a href="#">Osborne Capital Markets Limited</a></p>
                </div>
            </div> <!-- copy-right -->
        </footer> <!-- footer-section -->
