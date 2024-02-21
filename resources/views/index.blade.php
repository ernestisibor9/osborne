@extends('layouts.site')
@push('css')
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
@endpush
@section('content')
    <section class="slider-section">
        <h2 class="hidden">title</h2>

        <div class="rev_slider_wrapper">
            <div id="rev_slider_1" class="rev_slider" style="display:none">
                <ul>
                    <li data-transition="random" data-title="Slide Title" data-param1="Additional Text" data-thumb="{{ asset('site/assets/images/black-office-people.jpg') }}">
                        <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                        <img src="{{ asset('site/assets/images/black-office-people.jpg') }}" alt="Sky" class="rev-slidebg">
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4"
                            data-x="left" data-hoffset="0"
                            data-y="top" data-voffset="300"
                            data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>FINANCIAL ADVISORY
                        </div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption font-medium sfb tp-resizeme letter-space-5"
                            data-x="left" data-hoffset="0"
                            data-y="center" data-voffset="90"
                            data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>OCML renders Financial Advisory services in capital issues, <br>debts restructuring, Mergers & Acquisition
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption sfr tp-resizeme letter-space-4"
                            data-x="left" data-hoffset="0"
                            data-y="center" data-voffset="180"
                            data-frames='[{"delay":2200,"speed":2000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <a href="{{ route('about.home-page') }}" class="el-btn-regular slider-btn-left btn btn-primary">Read more</a>
                        </div>
                    </li>

                    <li data-transition="random" data-title="Slide Title" data-param1="Additional Text" data-thumb="{{ asset('site/assets/images/nigerian-exchange.jpg') }}">
                        <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                        <img src="{{ asset('site/assets/images/nigerian-exchange.jpg') }}" alt="Sky" class="rev-slidebg">
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4"
                            data-x="center" data-hoffset="0"
                            data-y="top" data-voffset="300"
                            data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>SECURITIES TRADING
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption font-medium text-center sfb tp-resizeme letter-space-5"
                            data-x="center" data-hoffset="0"
                            data-y="center" data-voffset="90"
                            data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>OCML has a team of Securities Traders who have garnered <br> in-depth knowledge of the market in securities trading over the years.
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption lfb tp-resizeme"
                            data-x="center" data-hoffset="0"
                            data-y="center" data-voffset="180"
                            data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'><a href="{{ route('about.home-page') }}" class="el-btn-regular slider-btn-left btn btn-primary">Read more</a>
                        </div>
                    </li>
                    <li data-transition="random" data-title="Slide Title" data-param1="Additional Text" data-thumb="{{ asset('site/assets/images/slider/bg-slide-1.jpg') }}">
                        <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                        <img src="{{ asset('site/assets/images/slider/bg-slide-1.jpg') }}" alt="Sky" class="rev-slidebg">
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4"
                            data-x="center" data-hoffset="0"
                            data-y="top" data-voffset="300"
                            data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>INVESTMENT BANKING SERVICES
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption font-medium text-center sfb tp-resizeme letter-space-5"
                            data-x="center" data-hoffset="0"
                            data-y="center" data-voffset="90"
                            data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>OCML offers a wide range of investment banking services to both quoted and unquoted companies to take advantage of market opportunities <br> to position their businesses for sustainable growth and expansion.
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption lfb tp-resizeme"
                            data-x="center" data-hoffset="0"
                            data-y="center" data-voffset="180"
                            data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'><a href="{{ route('about.home-page') }}" class="el-btn-regular slider-btn-left btn btn-primary">Read more</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="container-fluid" id="marqueeId">
        <div class="row">
            <div class="col-sm-12">
                <div class="content">
                    <div class="simple-marquee-container">
                        <div class="marquee-sibling">
                         @if($priceData)
                          <span>
                             <!--Market Price @ {{ date('M d, Y', strtotime($priceData[0]['tradeDate'])) }}-->
                             Market Price {{ $priceData[0]['tradeDate'] }}

                         </span>
                         @endif
                        </div>
                        <div class="marquee">


                               <ul class='marquee-content-items'>
                                @foreach($priceData as $company=>$datum)
                                @php
                                    $color = "";
                                    if($datum['icon'] == 'plus'){
                                        $color = "text-success";
                                    }
                                    if($datum['icon'] == 'minus'){
                                        $color = "text-danger";
                                    }
                                @endphp
                                    <li>
                                       <a href="{{route('price')}}" style="color:white;">{{$datum['company']}} {{$datum['value']}}</a>

                                        @if($datum['icon'] && in_array($datum['icon'], ['minus', 'plus']))
                                       <a href="{{route('price')}}"><i class="fa fa-{{$datum['icon']}} {{$color}}"></i></a>
                                        @endif

                                    </li>
                                @endforeach
                                </ul>



                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="finance-service-section section-padding">
        <div class="container text-center">
            <div class="section-title">
                <h2>Our Services</h2>
                <div class="border-3"></div>
            </div> <!-- section-title -->

            <div class="finance-carousel owl-carousel owl-theme">

                @foreach ($osbornServices as $osbornService)
                @php
                $icons = ["fa-handshake-o","fa-lock","fa-briefcase","fa-briefcase","fa-lock"];
                @endphp
                <div class="finance-wrapper item">
                    <div class="icon">
                        <i class="fa {{ $icons[$loop->index++] }} " aria-hidden="true"></i>
                    </div>

                    {{-- <img src="{{ asset("storage/app/$osbornService->image) }}"  style="height:150px; width:500px "  class="img-thumbnail" alt="" /> --}}

                      {{--<img src="{{ Storage::url($osbornService->image ) }}" style="height:150px; width:500px "  class="img-thumbnail" alt="" /> --}}

                    <div class="wrapper-content">
                        <h4><a href="{{ route('osborn-service.service-detail', $osbornService->id) }}">{{ strtoupper($osbornService->title)  }}</a></h4>
                        <p>
                           <?php echo substr(html_entity_decode($osbornService->body), 0, 100) ?>

                         </p>
                         
                         <!--<p>{{ Str::limit($osbornService->body, $limit =100, '...')  }}

                         </p>-->

                         {{-- <a href="{{ route('osborn-service.services',$serviceCategory) }}"></a> --}}
                    </div>
                    <div class="hover">
                        <span class="hover-one"></span>
                        <span class="hover-two"></span>
                        <span class="hover-three"></span>
                        <span class="hover-four"></span>
                    </div>
{{--
                    @if (!$osbornServices)
                    <div class="single-content">
                    @foreach ($serviceCategories as $serviceCategory)
                     {{ $serviceCategory->name }}


                     @endforeach
                    </div>
                    @endif  --}}
                </div>
                @endforeach

{{--
                <div class="finance-wrapper item">
                    <div class="icon">
                        <i class="fa fa-handshake-o" aria-hidden="true"></i>
                    </div>

                    <div class="wrapper-content">
                        <h4><a href="#">FINANCIAL ADVISORY</a></h4>
                        <p>
                            OCML renders Financial Advisory services in capital issues, debts restructuring, Mergers & Acquisition
                        </p>
                    </div>

                    <div class="hover">
                        <span class="hover-one"></span>
                        <span class="hover-two"></span>
                        <span class="hover-three"></span>
                        <span class="hover-four"></span>
                    </div> --}}
                </div>
{{--
                <div class="finance-wrapper item">
                    <div class="icon">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </div>

                    <div class="wrapper-content">
                        <h4><a href="#">SECURITIES TRADING</a></h4>
                        <p>
                            OCML has a team of Securities Traders who have garnered in-depth knowledge of the market in securities trading over the years.
                        </p>
                    </div>

                    <div class="hover">
                        <span class="hover-one"></span>
                        <span class="hover-two"></span>
                        <span class="hover-three"></span>
                        <span class="hover-four"></span>
                    </div>
                </div>

                <div class="finance-wrapper item">
                    <div class="icon">
                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                    </div>

                    <div class="wrapper-content">
                        <h4><a href="#">INVESTMENT BANKING</a></h4>
                        <p>
                            Our investment banking services are structured to deliver (maximize) value to both the Principal (issuer) and the investors.
                        </p>
                    </div>

                    <div class="hover">
                        <span class="hover-one"></span>
                        <span class="hover-two"></span>
                        <span class="hover-three"></span>
                        <span class="hover-four"></span>
                    </div>
                </div>

                <div class="finance-wrapper item">
                    <div class="icon">
                       <i class="fa fa-bar-chart" aria-hidden="true"></i>
                    </div>

                    <div class="wrapper-content">
                        <h4><a href="#">WEALTH MANAGEMENT</a></h4>
                        <p>
                            Careful profiling of clients enables us to construct an investment portfolio to meet their specific investment objective
                        </p>
                    </div>

                    <div class="hover">
                        <span class="hover-one"></span>
                        <span class="hover-two"></span>
                        <span class="hover-three"></span>
                        <span class="hover-four"></span>
                    </div>
                </div> --}}
            </div>
        </div>
    </section> <!-- finance-service-section -->



    <section class="about-Company-Section">
        <div class="overlay section-padding text-white">
            <div class="container">
                <div class="section-title text-center">
                    <h2>WHO WE ARE</h2>
                    <div class="border-3"></div>
                </div> <!-- section-title -->

                <div class="row">
                    <div class="col-md-7">
                        <div class="content-wrapper text-white">
                            <p>
                                OSBORNE CAPITAL MARKETS LIMITED (OCML) is a financial services firm registered by Securities and Exchange Commission and the Nigerian Stock Exchange as an Issuing House and Broker/Dealer.
                           </p>

                            <h4 class="text-white">Our Services</h4>

                            <ul class="content text-white">
 @foreach ($osbornServices as $osbornService)
                            @php
                $icons = ["fa-handshake-o","fa-lock","fa-briefcase","fa-lock","fa-briefcase","fa-accusoft"];
                @endphp


                                <li>
                                <i class="fa {{ $icons[$loop->index++] }} " aria-hidden="true"></i>

                                    <div class="single-content">
                                       {{ strtoupper($osbornService->title)  }}
                                    </div>
                                </li>
                                @endforeach
                            </ul>


                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="quote-section">
                        <div class="contact-wrapper">
                                <h3>Signup for investment tips</span></h3>

                                @if(session('success'))
                                <div class="text-success bg-white p-3 mr-5 b">
                                    {{ session('success') }}
                                </div>
                                @else

                                <div class="text-danger p-3 mr-5 b">
                                    {{ session('failure') }}
                                </div>
                                @endif
                                <!--<form method="post" action="{{ url('send-newsLetter')}}" class="signupForm" enctype="multipart/form-data">-->
                                <!--        @csrf-->
                                <!--    <div class="form-wrapper">-->
                                <!--        <input name="email" class="searchBar" required="" placeholder="email address...">-->

                                <!--        <button type="submit" class="subscribeBtn btn-primary">Submit</button>-->
                                <!--    </div>-->
                                <!--</form>-->
                                 <form action="/subscribe" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="signupForm validate" novalidate>
                                    @csrf
                                <div class="form-wrapper">
                                    <input style="width:100%; padding:15px 10px" name="email" class="searchBar" required=""  id="mce-EMAIL" placeholder="email address...">

                                    <div id="mce-responses" class="clear">
                                        <div class="response" id="mce-error-response" style="display:none"></div>
                                        <div class="response" id="mce-success-response" style="display:none"></div>
                                    </div>

                                    <button type="submit" style="margin-top:10px;" name="submit" class="subscribeBtn btn-primary btn-block" id="mc-embedded-subscribe">Submit</button>
                                </div>
                                
                            </form>
                        </div>
                        </div>
                        <!--<div class="quote-section">-->
                        <!--<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>-->
                                <!--<script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>-->
                        <!--    <h3>Message Us</h3>-->
                        <!--        @if(session('success'))-->
                        <!--                    <div class="alert alert-success p-3 mr-5 b">-->
                        <!--                        {{ session('success') }}-->
                        <!--                    </div>-->
                        <!--        @endif-->

                        <!--    @if ($errors->any())-->
                        <!--        <div class="alert alert-danger">-->
                        <!--            <ul>-->
                        <!--                @foreach ($errors->all() as $error)-->
                        <!--                    <li>{{ $error }}</li>-->
                        <!--                @endforeach-->
                        <!--            </ul>-->
                        <!--        </div>-->
                        <!--    @endif-->
                        <!--    <form class="contact-form" method="POST" action="{{ route('email.ContactMail') }}">-->
                        <!--        @csrf-->
                        <!--        <div class="form-group">-->
                        <!--            <i class="fa fa-user" aria-hidden="true"></i>-->

                        <!--            <input id="name" name="name" type="text" class="form-control"  required="" placeholder="Name">-->
                        <!--        </div>-->

                        <!--        <div class="form-group">-->
                        <!--            <i class="fa fa-envelope-o" aria-hidden="true"></i>-->

                        <!--            <input class="domainSearchBar form-control" id="email" name="email" type="email" required="" placeholder="Email">-->
                        <!--        </div>-->

                        <!--        <div class="form-group">-->
                        <!--            <i class="fa fa-phone" aria-hidden="true"></i>-->

                        <!--            <input id="last-name" name="name" type="text" class="form-control"  required="" placeholder="phone">-->
                        <!--        </div>-->



                        <!--        <div class="form-group">-->
                        <!--            <i class="fa fa-comment-o" aria-hidden="true"></i>-->

                        <!--            <textarea id="message" name="message" class="form-control form-message" rows="3" required="" placeholder="Message"></textarea>-->
                        <!--        </div>-->

                        <!--          <div class="form-group">-->
                        <!--      {!! NoCaptcha::renderJs() !!}-->
                        <!--      {!! NoCaptcha::display() !!}-->
                        <!--    </div>-->


                        <!--        <div class="form-group">-->
                        <!--            <button class="btn btn-primary" type="submit">Submit</button>-->
                        <!--        </div>-->
                        <!--    </form>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- about-Company-Section -->



    <section class="right-choice-section section-padding">
        <div class="container text-center" id="visionMission">
            <div class="row">
                <div class="col-sm-4">
                    <div class="section-wrapper">
                        <div class="caption">
                            <img src="{{ asset('site/assets/images/upload-nigerian-vision.jpg') }}" alt="">
                        </div>
                        <div class="content">
                            <h4>Our Vision</h4>
                            <p>
                                To be the preferred financial services provider in Nigeria
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="section-wrapper">
                        <div class="caption">
                            <img src="{{ asset('site/assets/images/stock-img1.jpg') }}" alt="">

                        </div>

                        <div class="content">
                            <h4>Our Mission</h4>
                            <p>
                                To deliver world-class financial services to our select clientele
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="section-wrapper">
                        <div class="caption">
                            <img src="{{ asset('site/assets/images/stock3.jpg') }}" alt="">
                        </div>

                        <div class="content">
                            <h4>Brand Driver</h4>
                            <p>
                                Passion for
                                Excellence
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- right-choice-section -->

    <section class="about-Company-Section">
        <div class="overlay custom-padding text-white">
            <div class="container">
                <div class="row">
    <div class="col-md-5 col-sm-12 col-xs-12">

        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
          <li class="nav-item active">
            <a class="nav-link"  data-toggle="tab" href="#tab1" role="tab" aria-controls="home" aria-selected="true">Top Gainers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="profile" aria-selected="false">Top Losers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="contact" aria-selected="false">Market Summary</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade in active pb-4" id="tab1" role="tabpanel" aria-labelledby="home-tab">
              <h6 class="csv-table"> @ {{ $priceData[0]['tradeDate'] }}</h6>
              
              <table class="table table-bordered">


                    <tr>
                        <th>Company</th>
                        <th>Closing Price</th>
                        <th>Change</th>
                        <th>% Change</th>
                    </tr>

                    @forelse ($gainerData as $security=>$data)
                    <tr>
                        <td>{{ $data['company'] }}</td>
                        <td class="figure">{{ $data['closePrice']  }}</td>
                        <td class="figure">{{ $data['change']  }}</td>
                        <td class="figure">{{ $data['percentChange'].'%'  }}</td>

                    </tr>

                    @empty
                    No Record pls upload Record
                    @endforelse

              </table>
          </div>
          <div class="tab-pane fade pb-4" id="tab2" role="tabpanel" aria-labelledby="profile-tab">
               <h6 class="csv-table"> @ {{ date('M d, Y', strtotime($priceData[0]['tradeDate'])) }}</h6>
              <table class="table table-bordered">

                    <tr>
                        <th>Company</th>
                        <th>Closing Price</th>
                        <th>Change</th>
                        <th>% Change</th>
                    </tr>
                @forelse ($loserData as $security=>$data)
                    <tr>
                        <td>{{ $data['company'] }}</td>
                        <td class="figure">{{ $data['closePrice']  }}</td>
                        <td class="figure">{{ $data['change']  }}</td>
                        <td class="figure">{{ $data['percentChange'].'%'  }}</td>
                    </tr>
                    @empty
                    No Record pls upload Record
                    @endforelse




              </table>
          </div>
          <div class="tab-pane fade pb-4" id="tab3" role="tabpanel" aria-labelledby="contact-tab">
               <h6 class="csv-table"> @ {{ date('M d, Y', strtotime($priceData[0]['tradeDate'])) }}</h6>
              <table class="table table-bordered">

                <tr>
                    <td>ASI</td>
                    <td class="figure"> {{number_format($marketSummary->asi, 2, ".", ",")}} </td>
                </tr>
                <tr>
                    <td>Deals</td>
                    <td class="figure">{{number_format($marketSummary->deal, 2, ".", ",")}}</td>
                </tr>
                <tr>
                    <td>Volume</td>
                    <td class="figure">{{number_format($marketSummary->volume, 2, ".", ",")}}</td>
                </tr>
                <tr>
                    <td>Value</td>
                    <td class="figure">{{number_format($marketSummary->value, 2, ".", ",")}}</td>
                </tr>
                <tr>
                    <td>Market Capital</td>
                    <td class="figure">{{number_format($marketSummary->market_cap, 2, ".", ",")}}</td>
                </tr>
                <tr>
                    <td>Bond Capital</td>
                    <!--<td class="figure">{{number_format($marketSummary->bond_cap,2)}}</td>-->
                    
                    <td class="figure">{{number_format($marketSummary->bond_cap, 2, ".", ",")}}</td>
                </tr>
                <tr>
                    <td>ETF Capital</td>
                    <td class="figure">{{number_format($marketSummary->etf_cap, 2, ".", ",")}}</td>
                </tr>

              </table>
          </div>
        </div>
    </div>

    <div class="col-md-7 col-sm-12 col-xs-12">
        <form class="form trans-form">
            <div class="row">
                  <div class="col-sm-1 col-xs-1 add-container">
                    <a
                      style="font-weight: bold; color: #fff"
                      id="create-inputs"
                      class="text-white"
                    >
                      +
                  </a>
                  </div>
                  <div id="fields" class="col-sm-11 col-xs-11">
                    <h4>Stock Calculator</h4>
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="form-group">



                            <select name="stock" id="stock" class="form-control bg-light">
                              <option value="" selected="selected">Select Stock</option>
                                 @foreach($priceData as $company=>$datum)
                               <option value="{{$datum['value']}}">
                                      {{$datum['company']}} {{$datum['value']}}
                               </option>

                                @endforeach
                            </select>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                            <select name="stock" id="buySell" class="form-control">
                              <option value="buy">Buy</option>
                              <option value="sell">Sell</option>
                              <option value="" selected="selected">Buy/Sell</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-sm-2">
                          <div class="form-group">
                              <input
                              type="text"
                              id="qty"
                              class="form-control w-50"
                              placeholder="Qty"
                            />
                          </div>
                      </div>
                      <div class="col-sm-3">
                        <p id="total" style="color:#fff">TOTAL</p>
                      </div>
                    </div>
                  </div>
                </div>
            <div id="result" class="text-light" style="color:#fff;padding-top:15;padding-left:15px"></div>
        </form>
    </div>
</div>
            </div>
        </div>
    </section> <!-- about-Company-Section -->



     <section class="news-section section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h2>Latest Financial  News </h2>
                <div class="border-3"></div>
            </div> <!-- section-title -->

            <div class="row">
                {{-- <div class="col-md-4 col-sm-6">
                    <div class="news-wrapper">
                        <img src="{{ asset('site/assets/images/news/1.jpg') }}" alt="">

                        <div class="news-content">
                            <h4><a href="#">Florida insurance stocks get crushed for IRMA</a></h4>

                            <p>Lorem ipsum dolor sit amet, consec tetuer adipiscing elit, sed diam nonummy nibh euis.</p>

                            <span class="date">Sep 09, 2018</span>

                            <span class="tag pull-right"><a href="#">Business , </a> <a href="#">Finance</a></span>
                        </div>
                    </div>
                </div> --}}

                @foreach ($maketNewss as $maketNews)
                <div class="col-md-4 col-sm-12">
                    <div class="news-wrapper last-wrapper">
                        <div class="news-content size-changer">
                         <h4><a href="{{ route('market-news.news-detail', $maketNews->id)}}" class="link">{{ Str::words(strtoupper($maketNews->title), $words =10, $end='..') }}</a></h4>
                       

                                     <p>
                            {!! Str::limit( Str::ucfirst(strip_tags($maketNews->body)), $limit = 150, $end = '.......<br> <a href='.route('market-news.news-detail', $maketNews->id).' class="btn btn-primary-sm btn-sm btn-xs"><br>Read More</a>') !!}
                                     </p>
                                    <!-- <p>-->
                                         

                                    <!--     {{ substr(strip_tags($maketNews->body), 0, 100) }}-->

                                    <!--</p>-->


                            <span class="date">{{ Carbon\Carbon::parse($maketNews->created_at)->isoFormat('MMM Do YYYY') }}
                        </span>


                            <span class="tag pull-right"><a href="{{ route('market-news.news-detail', $maketNews->id) }}">{{ !empty($maketNews->category) ? $maketNews->category->name:'' }} </a> <a href="#"></a></span>
                        </div>

                    </div>
                </div>

                @endforeach
{{--
                <div class="col-md-4 col-sm-12">
                    <div class="news-wrapper last-wrapper">
                        <div class="news-content size-changer">
                            <h4><a href="#">Florida insurance stocks get crushed for IRMA</a></h4>

                            <p>Lorem ipsum dolor sit amet, consec tetuer adipiscing elit, sed diam nonummy nibh euis.</p>

                            <span class="date">Sep 09, 2018</span>

                            <span class="tag pull-right"><a href="#">Business , </a> <a href="#">Finance</a></span>
                        </div>

                        <div class="news-content size-changer">
                            <h4><a href="#">Florida insurance stocks get crushed for IRMA</a></h4>

                            <p>Lorem ipsum dolor sit amet, consec tetuer adipiscing elit, sed diam nonummy nibh euis.</p>

                            <span class="date">Sep 09, 2018</span>

                            <span class="tag pull-right"><a href="#">Business , </a> <a href="#">Finance</a></span>
                        </div>
                    </div>
                </div> --}}
            </div>

            <div class="link text-center">
                <a href="{{ route('market-news.all-news') }}" class="btn btn-primary">More News</a>
            </div>
        </div>
    </section> <!-- news-section -->




    <!--<section class="about-Company-Section signup-section">-->
    <!--    <div class="overlay section-padding text-white">-->
    <!--        <div class="container">-->
    <!--            <div class="row">-->
    <!--                <div class="row">-->
    <!--                    <div class="col-md-6 col-sm-7">-->
    <!--                        <div class="contact-wrapper">-->
    <!--                            <h3>Signup for investment tips</span></h3>-->

    <!--                            @if(session('success'))-->
    <!--                            <div class="text-success bg-white p-3 mr-5 b">-->
    <!--                                {{ session('success') }}-->
    <!--                            </div>-->
    <!--                            @else-->

    <!--                            <div class="text-danger p-3 mr-5 b">-->
    <!--                                {{ session('failure') }}-->
    <!--                            </div>-->
    <!--                            @endif-->
                                <!--<form method="post" action="{{ url('send-newsLetter')}}" class="signupForm" enctype="multipart/form-data">-->
                                <!--        @csrf-->
                                <!--    <div class="form-wrapper">-->
                                <!--        <input name="email" class="searchBar" required="" placeholder="email address...">-->

                                <!--        <button type="submit" class="subscribeBtn btn-primary">Submit</button>-->
                                <!--    </div>-->
                                <!--</form>-->
    <!--                             <form action="https://alabiansolutions.us7.list-manage.com/subscribe/post?u=65bcc2e68977a344654afb3f3&amp;id=bddc15f889" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="signupForm validate" target="_blank" novalidate>-->
    <!--                                @csrf-->
    <!--                            <div class="form-wrapper">-->
    <!--                                <input name="b_65bcc2e68977a344654afb3f3_bddc15f889" class="searchBar" required=""  id="mce-EMAIL" placeholder="email address...">-->

    <!--                                <div id="mce-responses" class="clear">-->
    <!--                                    <div class="response" id="mce-error-response" style="display:none"></div>-->
    <!--                                    <div class="response" id="mce-success-response" style="display:none"></div>-->
    <!--                                </div>-->

    <!--                                <button type="submit" class="subscribeBtn btn-primary" id="mc-embedded-subscribe">Submit</button>-->
    <!--                            </div>-->
    <!--                            <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>-->
    <!--                            <script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>-->
    <!--                        </form>-->
    <!--                        </div>-->
    <!--                    </div>-->

    <!--                    <div class="col-md-6 col-sm-5 hidden-xs">-->
    <!--                        <div class="caption text-right wow slideInRight">-->
    <!--                            <img src="assets/images/girl.png" alt="">-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section> -->
    
    <!-- about-Company-Section -->

@endsection
