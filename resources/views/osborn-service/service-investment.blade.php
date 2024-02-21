@extends('layouts.site')
@section('content')


        <section class="page section-padding">
            <div class="container text-center">
                <h2 class="title">Financial Advisory</h2>
            </div>
        </section> <!-- header-title -->

        <section class="service-page-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        @include('partials.site.service')
                    </div>

                    <div class="col-md-8">
                        @foreach ($osbornServices as $osbornService)
                        <div class="single-service-wrapper">
                            <h3 class="mt-3">{{ $osbornService->title }}</h3>


                            <p>
                                <p>{{ $osbornService->body }}
                            </p>
{{-- 
                            <p>
                                We parade a team of technically sound professionals who are authorities in different segments of the market.
                            </p> --}}
                            <img src="{{ Storage::url($osbornService->image) }}"  style="height:500px; width:500px " class="img-thumbnail mb-3" alt="">

                            {{-- <img src="{{ asset('site/assets/images/slider/bg-slide-2.jpg') }}" class="img-thumbnail" alt=""> --}}

                           
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section> <!-- service-page-section -->
@endsection