@extends('layouts.site')
@section('content')
<section class="page section-padding">
   <div class="container text-center">
       <h2 class="title">{{ $maketNews->category->name }}</h2>
       <span class="sub-title">Home > market news </span>
   </div>
</section> <!-- header-title -->

  


<section class="news-section section-padding">
        <div class="container">
            <div class="section-title text-center">
                 <h4><a href="#">{{ strtoupper($osbornService->title) }}</a></h4>
                <div class="border-3"></div>
            </div> <!-- section-title -->

              

                    <div class="news-wrapper last-wrapper">
                        {{-- <div class="news-content size-changer"> --}}
                        <div class="content ">
                <div class="row">
                <div class="col-md-8 col-sm-8 text-center">

                          

                            <p class=" pull-center text-left ml-5">
                          
                            {{ $osbornService->body }}

                            </p>



                        </div>

                    </div>
                </div>

            </div>

            <div class="link text-center">
                            <span class="date pull-left">{{ date('Y-m-d', strtotime($osbornService->created_at)) }}</span>
            </div>
        </div>
</section> <!-- news-section -->


@endsection




