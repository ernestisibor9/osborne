@extends('layouts.site')
@section('content')

        <section class="page section-padding">
            <div class="container text-center">
                <h2 class="title">Company Profile</h2>
            </div>
        </section> <!-- header-title -->


        <section class="service-page-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <!--<h3>COMPANY PROFILE</h3>-->
                        <p style="font-size:22px">
                            Osborne Capital Markets Limited is a financial services firm duly registered and regulated by the Securities and Exchange Commission (SEC) as an Issuing House and Broker/Dealer.
                            It is a Trading License Holder of the Nigerian Exchange Limited (NGX)
                        </p>
                    </div>
                    <div class="col-sm-5">
                        <div class="caption text-center wow slideInRight">
                            <img class="img-thumbnail" src="{{ asset('site/assets/images/upload-nigerian-vision.jpg') }}" alt="">
                        </div>
                     </div>

                </div>

            </div>
        </section> <!-- service-page-section -->
@endsection
