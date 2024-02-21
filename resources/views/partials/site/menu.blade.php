<!-- Off-Canvas View Only -->
        <span class="menu-toggle navbar visible-xs visible-sm"><i class="fa fa-bars" aria-hidden="true"></i></span>

        <div id="offcanvas-menu" class="visible-xs visible-sm">
            
            <span class="close-menu"><i class="fa fa-times" aria-hidden="true"></i></span>

            <ul class="menu-wrapper">
                <li><a href="/">Home</a></li><!-- end of li -->
                <li><a href="{{ route('about.home-page') }}">About</a></li><!-- end of li -->
                <li><a href="{{ route('osborn-service.service-page') }}">Services</a></li><!-- end of li -->
                <li>
                    <a class="dropmenu" href="#">Account Opening <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    <ul class="dropDown sub-menu">
                        <li><a href="https://www.ocmlngonline.com/iw/NewAccount/Index">Account Opening</a></li>
                        <!--<li><a href="/accountopening-corporate-form">Corporate</a></li>-->
                        <li><a href="{{ route('pdf-download.downloads') }}">Downloads</a></li>
                    </ul><!-- end of dropdown -->
                </li><!-- end of li -->
                <li>
                    <a class="dropmenu" href="#">Research <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    <ul class="dropDown sub-menu">
                        <li><a href="/ngx-daily-price-list">NGX Daily Market Report</a></li>
                        <li><a href="/corporate-action-display">Corporate Action</a></li>
                        <li><a href="/company-financial-report-display">Financial Report</a></li>
                    </ul><!-- end of dropdown -->
                </li><!-- end of li -->

                <li><a href="https://www.ocmlngonline.com/iw">Client Portal</a></li><!-- end of li -->
                <li><a href="{{ route('contact-us') }}">Contact</a></li><!-- end of li -->
            </ul> <!-- menu-wrapper -->      
        </div>
        <!-- Off-Canvas View Only -->