@extends('layouts.site')
@section('content')


        <section class="page section-padding">
            <div class="container text-center">
                <h2 class="title">{{ $osbornService->title }}</h2>
                
            </div>
        </section> <!-- header-title -->



        <section class="service-page-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        @include('partials.site.service')
                    </div>

                 
                    <div class="col-md-8">
                        <div class="single-service-wrapper">
                            
                            <h3>{{ $osbornService->title }}</h3>
                            
                            <img src="{{ Storage::url($osbornService->image) }}" class="img-thumbnail" alt="">
                            
                            <!--<p>-->
                            <!--    {{ $osbornService->body }}-->
                            <!--</p>-->
                            <p>
                                <?php echo html_entity_decode($osbornService->body) ?>
                            </p>

                           
                        </div>
                    </div>
           
                </div>
            </div>
        </section> <!-- service-page-section -->
@endsection