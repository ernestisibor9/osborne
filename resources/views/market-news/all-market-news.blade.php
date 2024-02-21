@extends('layouts.site')
@section('content')

<section class="page section-padding">
   <div class="container text-center">
       <!--<h2 class="title"></h2>-->
       <span class="sub-title">Home >All Market News </span>
   </div>
</section> <!-- header-title -->


    <section class="news-section section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h2>Market News </h2>
                <div class="border-3"></div>
            </div> <!-- section-title -->

            <div class="row mt-4 my-3">
                @foreach ($maketNewss as $maketNews)
                <div class="col-md-4 col-sm-6 mb-5 mt-5 mx-4 my-4">
                    <div class="news-wrapper my-5">
                   
                    <!--<div class="news-wrapper last-wrapper">-->
                        <div class="news-content size-changer mb-4 mt-4">
                         <h4><a href="{{ route('market-news.news-detail', $maketNews->id)}}" class="link">{{ Str::words(strtoupper($maketNews->title), $words =5, $end='..') }}</a></h4>
                                  <p>
                            {!! Str::limit( Str::ucfirst(strip_tags($maketNews->body)), $limit = 150, $end = '.......<br> <a href='.route('market-news.news-detail', $maketNews->id).' class="btn btn-primary-sm btn-sm btn-xs"><br>Read More</a>') !!}
                                     </p>
                        <!--<p>-->
                        <!--    {!! Str::limit( Str::ucfirst($maketNews->body), $limit = 200, $end = '.......<br> <a href='.route('market-news.news-detail', $maketNews->id).' class="btn btn-primary-sm btn-sm btn-xs"><br>Read More</a>') !!}-->
                        <!--    </p>-->
                            <span class="date">{{ Carbon\Carbon::parse($maketNews->created_at)->isoFormat('MMM Do YYYY') }}</span>


                            <span class="tag pull-right"><a href="{{ route('market-news.news-detail', $maketNews->id) }}">{{ !empty($maketNews->category) ? $maketNews->category->name:'' }} </a> <a href="#"></a></span>
                        </div>
 

        
                    </div><br><br>
                </div>
                @endforeach
               
                    </div>
                    
                    </div>
            
    </section> <!-- news-section -->

@endsection




