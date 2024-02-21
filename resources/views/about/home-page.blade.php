@extends('layouts.site')
@section('content')
<section class="page section-padding">
   <div class="container text-center">
       <h2 class="title">About</h2>
       <span class="sub-title">Home > About</span>
   </div>
</section> <!-- header-title -->



   <section class="about-office-section section-padding">
       <div class="container">
           <div class="row">
               <div class="col-md-6">
                   <div class="content">
                    @foreach ($abouts as $about)
                  
                        <h3>{{ $about->name }}</h3>
                        <p style="font-size:20px"> @php echo html_entity_decode($about->description);  @endphp </p>
                        
                    @endforeach
                    <h3>We have core competencies in</h3>
                    <ul style="font-size:19px">
                       <li style="list-style-type:disc">Capital Issues</li>
                       <li style="list-style-type:disc"> Debt Restructuring</li>
                       <li style="list-style-type:disc">Mergers and Acquisition</li>
                       <li style="list-style-type:disc">Securities Trading</li>
                       <li style="list-style-type:disc">Asset management</li>
                       <li style="list-style-type:disc">Advisory services</li>
                    </ul>
                   </div>
               </div>

               <div class="col-md-6">
                   <div class="caption text-center wow slideInRight">
                       <img src="{{ asset('site/assets/images/slider/bg-slide-3.jpg') }}" alt="">
                   </div>
               </div>
           </div>
       </div>
   </section> <!-- about-office-section -->
  


@endsection