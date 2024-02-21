<?php 
if(isset($_GET['accept-cookie']) && $_GET['accept-cookie'] == 'accept'){
	setcookie('name', 'data', time() + (86400 * 45));
}

$privacy="site/assets/documents/pdf/data-privacy.pdf";
$privacyNotice="site/assets/documents/pdf/consent-form.pdf";
$showdiv = $hidediv = "";
 $showdiv = "<div class='container-fluid' id='cookie'>
            <div class='row'>
                <div class='col-sm-12 cookie-padding'>
                    <p style='font-size:12px; margin-bottom:10px'>
                         We use cookies on our websites to improve your user experience and our services, and to analyze the use of our website. 
                         In accordance with NDPR, continuing to use this platform indicates your consent to the processing of your 
                         personal data by Osborne Capital Markets Limited and our partners as detailed in our Privacy Policy. 
                         To learn more, read our <a href='$privacy' style='color:yellow'>Privacy Policy</a> and <a href='$privacyNotice' style='color:yellow'>Data Consent Policy</a>
                    </p>
                    <a href='/?accept-cookie=accept' style='color:yellow; margin-top:5px; font-size:12px'>Accept All Cookies</a>
                </div>
            </div>
</div>";

$hidediv = "<div class='container-fluid' id='cookie' style='display:none'>
            <div class='row'>
                <div class='col-sm-12 cookie-padding'>
                    <p style='font-size:12px'>
                         We use cookies on our websites to improve your user experience and our services, and to analyze the use of our website. 
                         In accordance with NDPR, continuing to use this platform indicates your consent to the processing of your 
                         personal data by Osborne Capital Markets Limited and our partners as detailed in our Privacy Policy. 
                         To learn more, read our <a href='$privacy' style='color:yellow'>Privacy Policy</a> and <a href='$privacyNotice' style='color:yellow'>Data Consent Policy</a>
                    </p>
                    <a href='#' style='color:yellow'>Double Click To Accept All Cookies</a>
                </div>
            </div>
</div>";


?>
<!DOCTYPE html>
<html lang="en">
    <head>
         <title>
            @yield('title')
        </title>
        @include('partials.site.head')

    </head>
    <body class="homePageOne">
        <!-- start preloader -->
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- end preloader -->
        
        @include('partials.site.header')
        @yield('content')
        @include('partials.site.footer')
        
        <?php
            if(!isset($_COOKIE['name'])){
    			echo $showdiv;
	         }else{
	             
	             echo $hidediv;
	         }
        
        ?>
       

        @include('partials.site.menu')

        <div id="toTop" class="hidden-xs">
            <i class="fa fa-chevron-up"></i>
        </div> <!-- totop -->
       

        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
        <script src="{{ asset('site/assets/js/jquery.js') }}"></script>
        <script src="{{ asset('site/assets/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('site/assets/js/jquery.inview.min.js') }}"></script>
        <script src="{{ asset('site/assets/js/wow.js') }}"></script>
        <script src="{{ asset('site/assets/js/lightbox.js') }}"></script>
        <script src="{{ asset('site/assets/js/portfolio.js') }}"></script>
        <script src="{{ asset('site/assets/owl-carrosel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('site/assets/js/jquery-ui.js') }}"></script>
        <script src="{{ asset('site/assets/js/language.js') }}"></script>

        <!-- Revolution Slider -->
        <script src="{{ asset('site/assets/revolution/jquery.themepunch.revolution.min.js') }}"></script>
        <script src="{{ asset('site/assets/revolution/jquery.themepunch.tools.min.js') }}"></script>
        @stack('scripts')
        <!-- Revolution Extensions -->
        <script type="text/javascript" src="{{ asset('site/assets/revolution/extensions/revolution.extension.actions.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('site/assets/revolution/extensions/revolution.extension.carousel.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('site/assets/revolution/extensions/revolution.extension.kenburn.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('site/assets/revolution/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('site/assets/revolution/extensions/revolution.extension.migration.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('site/assets/revolution/extensions/revolution.extension.navigation.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('site/assets/revolution/extensions/revolution.extension.parallax.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('site/assets/revolution/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('site/assets/revolution/extensions/revolution.extension.video.min.js') }}"></script>
        <script src="{{ asset('site/assets/js/script.js') }}"></script>
        <script src="{{ asset('site/assets/js/marquee.js') }}"></script>
        <script src="{{ asset('site/assets/js/calculator.js') }}"></script>
        <script src="{{ asset('site/assets/js/custom.js') }}"></script>
        
        <script>
            $(function (){

                /* Example options:
                
                    let options = {
                        autostart: true,
                        property: 'value',
                        onComplete: null,
                        duration: 20000,
                        padding: 10,
                        marquee_class: '.marquee',
                        container_class: '.simple-marquee-container',
                        sibling_class: 0,
                        hover: true,
                        velocity: 0.1
                        direction: 'right'
                    }

                    $('.simple-marquee-container').SimpleMarquee(options);
                    
                */
                
                let options = {
                        autostart: true,
                        property: 'value',
                        onComplete: null,
                        duration: 100,
                        padding: 10,
                        marquee_class: '.marquee',
                        container_class: '.simple-marquee-container',
                        sibling_class: 0,
                        hover: true,
                        velocity: 0.1,
                        direction: 'left'
                    }

                $('.simple-marquee-container').SimpleMarquee(options);
                
            });

        </script>
    </body>
</html>