@extends('layouts.site')
@section('content')

<section class="page section-padding">
   <div class="container text-center">
       <h2 class="title">All Services</h2>
       <!--<span class="sub-title">Home >All Services </span>-->
   </div>
</section> <!-- header-title -->


    <section class="news-section section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h2>Services </h2>
                <div class="border-3"></div>
            </div> <!-- section-title -->
                @foreach ($osbornServices as $osbornService)

            <div class="row mt-4 my-3">
                <div class="col-md-4 col-sm-6 mb-5 mt-5 mx-4 my-4">
                    <div class="news-wrapper my-5">

                    <div class="news-wrapper last-wrapper">
                        <div class="news-content size-changer mb-4 mt-4">
                         <h4><a href="{{ route('osborn-service.single-detail-page', $osbornService->id)}}" class="link">{{ Str::words(strtoupper($osbornService->title), $words =2, $end='..') }}</a></h4>
                        <p>
                            {!! Str::limit( Str::ucfirst($osbornService->body), $limit = 150, $end = '.......<br> <a href='.route('osborn-service.single-detail-page', $osbornService->id).' class="btn btn-primary-sm btn-sm btn-xs"><br>Read More</a>') !!}
                            </p>
                            <!--<span class="date">{{ Carbon\Carbon::parse($osbornService->created_at)->isoFormat('MMM Do YYYY') }}</span>-->


                            <span class="tag pull-right"><a href="{{ route('osborn-service.single-detail-page', $osbornService->id) }}">

                                </a> <a href="#"></a></span>
                        </div>
                        </div>



                    </div><br><br>
                </div>
                @endforeach

                    </div>

                    </div>

    </section> <!-- news-section -->

@endsection
