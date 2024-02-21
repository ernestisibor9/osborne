@extends('layouts.site')
@section('content')
<section class="page section-padding">
   <div class="container text-center">
       <h2 class="title">{{ $maketNews->title }}</h2>
       {{-- <h2 class="title">{{ $maketNews->category->name }}</h2> --}}
       <span class="sub-title">Home > market news </span>
   </div>
</section> <!-- header-title -->


<section class="single-news-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="single-news">
                            <div class="news-wrapper">
                                {{-- <img src="assets/images/single-case.jpg" alt="image"> --}}

                                <div class="wrapper-content">
                                    <span class="title">{{ $maketNews->category->name }}</span>

                                    <h3>{{ $maketNews->title }}</h3>

                                    <span class="post"> {{ date('d M, Y', strtotime($maketNews->created_at)) }}</span>

                                    <p> @php echo html_entity_decode($maketNews->body);  @endphp</p>

                                    </div> <!-- wrapper-content -->
                            </div> <!-- news-wrapper -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

{{-- <section class="news-section section-padding">
        <div class="container">
            <div class="section-title text-center">
                 <h4><a href="#">{{ strtoupper($maketNews->title) }}</a></h4>
                <div class="border-3"></div>
            </div>


                    <div class="news-wrapper last-wrapper">

                        <div class="content ">
                <div class="row">
                <div class="col-md-8 col-sm-8 text-center">



                            <p class=" pull-center text-left ml-5">

                            @php echo html_entity_decode($maketNews->body) @enphp
                            


                            </p>



                        </div>

                    </div>
                </div>

            </div>

            <div class="link text-center">
                            <span class="date pull-left">{{ date('Y-m-d', strtotime($maketNews->created_at)) }}</span>
                            <span class="tag pull-right"><a href="#">{{ $maketNews->category->name }}, </a> <a href="#"></a></span>

            </div>
        </div>
</section>  --}}

<!-- news-section -->


@endsection




