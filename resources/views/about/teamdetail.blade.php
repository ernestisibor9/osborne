
@extends('layouts.site')
@section('content')
<section class="page section-padding">
   <div class="container text-center">
       <h2 class="title">{{ $team->name }}</h2>
       <span class="sub-title">Home > {{ $team->name }}</span>
   </div>
</section> <!-- header-title -->

<section id="mgt" class="team-page-section section-padding">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="row">
                     <div class="section-wrapper">
                        <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
                            <div class="row">
                                 <div class="col-sm-8 col-lg-8">
                                     <div class="team-wrapper">
                                         <!--<div class="caption">-->
                                         <!--    <img src="{{ asset('site/assets/images/team/1.jpg') }}" alt="">-->

                                         <!--    <ul class="hover-view">-->
                                         <!--        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
                                         <!--        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
                                         <!--        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
                                         <!--    </ul>-->
                                         <!--</div>-->
                                            <div class="team-inner-wrapper">
                                             <h4><a href="#">{{ $team->name  }}</a></h4>
                                             <div class="team-para-content">
                                                <span class="position">{{  $team->designation }}</span>
                                                <p>{{ $team->bio }}</p>
                                             </div>
                                             
                                         </div>
                                     </div>
                                 </div>

                                <div class="col-sm-4 col-lg-4">
                                    <div class="side-bar">
                                        <h3>{{$team->is_director ?'Director' : 'Management'}}</h3>
                                        @if($team->is_director)
                                        
                                        <ul class="page-list text-left newteam-style">
                                            @foreach ($directors as $director)
                                            <li><a href="{{ route('about.teamdetail', $director->id) }}">{{ $director->name }}</a></li>
                                            @endforeach
                                        </ul>
                                        
                                        @else
                                        <ul class="page-list text-left newteam-style">
                                            @foreach ($managements as $management)
                                            <li><a href="{{ route('about.teamdetail', $management->id) }}">{{ $management->name }}</a></li>
                                            @endforeach
                                        </ul>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                       
                     </div>
                 </div>
             </div>
         </div>
     </div>
  </section>

@endsection