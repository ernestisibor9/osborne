@extends('layouts.site')
@section('content')


        <section class="page section-padding">
            <div class="container text-center">

                <h2 class="title">
                    @foreach ($osbornServices as $osbornService)
                    {{  $osbornService->title }}
                </h2>
            </div>
        </section> <!-- header-title -->

        <section class="service-page-section section-padding">
            <div class="container">
                <div class="row">
                    {{--<div class="col-md-4">
                        @include('partials.site.service', ["serviceCategory"=>  $serviceCategories ])
                    </div>--}}
                    
                    

                         <div class="col-md-4">
                              <img src="{{ Storage::url($osbornService->image) }}" class="img-thumbnail mb-3" alt="">
                        </div>


                        <div class="col-md-8">
                            <div class="single-service-wrapper">
                                <h3 class="mt-3">{{ $osbornService->title }}</h3>
                                <p> @php echo html_entity_decode($osbornService->body);  @endphp
                            </div>
                        </div>
                         @endforeach
                    </div>
                </div>
                 {{--<div class="row">
                    <div class="col-md-4">
                          <img src="{{ Storage::url($osbornService->image) }}" class="img-thumbnail mb-3" alt="">
                    </div>
                    
                    


                    <div class="col-md-8">
                        <div class="single-service-wrapper">
                            <h3 class="mt-3">{{ $osbornService->title }}</h3>
                            <p>{{ $osbornService->body }}
                        </div>
                    </div>
                </div>--}}
            </div>
        </section> <!-- service-page-section -->
@endsection