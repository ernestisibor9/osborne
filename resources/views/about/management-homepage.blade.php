@extends('layouts.site')
@section('content')
<section class="page section-padding">
   <div class="container text-center">
       <h2 class="title">Management</h2>
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
                            <div class="col-md-4 col-md-offset-4">
                              <div class="side-bar">
                                <ul class="nav nav-tabs page-list">
                                    @if (!$managements == null )
                                @php
                                    $kanter = 0;
                                @endphp
                                @foreach ($managements as $management)
                                
                                    @php 
                                        $loopIndex = ++$loop->index;
                                    @endphp
                                    <li class='{{$loopIndex==1?'active':''}}' ><a rel='{{$loopIndex}}' data-toggle="tab" class='tab  {{$loopIndex==1?'active':''}}' href="#{{ $loopIndex}}">{{$management->name}}</a></li>
                                  
                                     @endforeach
                                    @endif
                                </ul>
                              </div>
                              
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                @if (!$managements == null )
                                @php
                                    $kanter = 0;
                                @endphp
                                @foreach ($managements as $management)
                                @php
                                    $index = ++$kanter;
                                    $active = $index == 1 ? 'active' : '';
                                @endphp
                                <div class="team-wrapper">
                                  <div class="tab-content">
                                      <div id="content_{{$index}}" class="tab-pane team-inner-wrapper fade in {{$active}}">
                                             <h4><a href="{{ route('about.management-detail', $management->id ?? '') }}" >{{ $management->name}}</a> <small style="font-size:15px; color:#fff" id="directorsTitle">{{$management->designation  }}</small></h4>
                                        <div class="team-para-content">
                                          <p>
                                           <?php echo html_entity_decode($management->bio) ?>
                                          </p>
                                        </div>
                                      </div>
                                    
                                      </div>
                                      
                                  </div>
                           
                                @endforeach
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
@push('scripts')
    <script>
        $(function(){
           $('.tab').click(function(){
               let rel = $(this).attr('rel');
               $('.tab').removeClass('active');
               $(this).addClass('active');
               $('.tab-pane').removeClass('active');
               $(`#content_${rel}`).addClass('active');
           })
        })
    </script>
@endpush
@endsection
