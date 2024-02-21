@extends('layouts.site')
@section('content')
<section class="page section-padding">
   <div class="container text-center">
       <h2 class="title">Directorsjkjkjkjkk</h2>
       <span class="sub-title">Home >Board Of Directors</span>
   </div>
</section> <!-- header-title -->

<section id="mgt" class="team-page-section section-padding">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="row">  
                     <div class="section-wrapper">
                        <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
                            <div class="row" style="display: flex; flex-direction:column">
                                <div class="col-sm-4 col-lg-4 col-lg-offset-4 col-sm-offset-4" style="margin-bottom:20px">
                                    <div class="side-bar">
                                       <ul id="directorsContainer" class="page-list text-left newteam-style">
                                           <!-- <li><a href="#" style="background: #062DA3; color:#fff">Alabi Adebayo</a></li>
                                           <li><a href="#">Alabi Adebayo</a></li>
                                           <li><a href="#">Alabi Adebayo</a></li>
                                           <li><a href="#">Alabi Adebayo</a></li> -->
                                       </ul>

                                    </div>
                                </div>
                                 <div class="col-sm-8 col-lg-8 col-lg-offset-2 col-sm-offset-2">
                                     <div class="team-wrapper">
                                           @foreach ($directors as $director)
                   
                                            <div id=directors"Link" class="team-inner-wrapper">
                                             <h4><a id = "directorName" href="{{ route('about.teamdetail', $director->id) }}">{{ $director->name }}</a> <small style="font-size:15px; color:#fff" id="directorsTitle">{{$director->designation  }}</small></h4>
                                             <div class="team-para-content">
                                                <div id="directorContent">
                                                   <?php echo html_entity_decode($director->bio) ?>
                                                </div>
                                             </div>

                                         </div>
                                         
                                            @endforeach
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
