@extends('layout.site')
@section('content')
<section class="page section-padding">
   <div class="container text-center">
       <h2 class="title">Team Name</h2>
       <span class="sub-title">Home > Team Name</span>
   </div>
</section> <!-- header-title -->



   <section class="team-page-section section-padding">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="row">
                     <div class="section-wrapper">
                        <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
                            <div class="row">
                                 <div class="col-sm-8 col-lg-8">
                                     <div class="team-wrapper">
                                         <div class="caption">
                                             <img src="{{ asset('site/assets/images/team/1.jpg') }}" alt="">

                                             <ul class="hover-view">
                                                 <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                 <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                 <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             </ul>
                                         </div>

                                         <div class="team-inner-wrapper">
                                             <h4><a href="#">Hasib Sharif</a></h4>
                                             <span class="position">Founder &amp; CEO</span>
                                             <p>
                                                These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled 
                                                These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled
                                                These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled
                                             </p>
                                         </div>
                                     </div>
                                 </div>

                                <div class="col-sm-4 col-lg-4">
                                    <div class="side-bar">
                                        <h3>Management</h3>
                                        <ul class="page-list text-center">
                                            <li><a href="about.html">Hasib Sharif</a></li>
                                            <li><a href="career.html">Hasib Sharif</a></li>
                                            <li><a href="team.html">Hasib Sharif</a></li>
                                            <li><a href="partners.html">Hasib Sharif</a></li>
                                        </ul>

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