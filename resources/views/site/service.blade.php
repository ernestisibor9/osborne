@extends('layout.site')
@section('content')


        <section class="page section-padding">
            <div class="container text-center">
                <h2 class="title"></h2>
                <span class="sub-title">Home &gt; Pages &gt; Services</span>
            </div>
        </section> <!-- header-title -->

        <section class="service-page-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <!--@include('partials.site.service')-->
                    </div>

                    <div class="col-md-8">
                        
                        <div class="single-service-wrapper">
                            <h3>Financial Advisory</h3>
                             
                            <p>
                                OCML renders Financial Advisory services in capital issues, debts restructuring, Mergers & Acquisition, Management Buy Out, Principal Investment, Funds Management, etc.
                            </p>

                            <p>
                                We parade a team of technically sound professionals who are authorities in different segments of the market.
                            </p>

                            <img src="{{ asset('site/assets/images/slider/bg-slide-2.jpg') }}" class="img-thumbnail" alt="">

                           
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- service-page-section -->
@endsection