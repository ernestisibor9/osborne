@extends('layout.site')
@section('content')

<section class="page section-padding">
    <div class="container text-center">
        <h2 class="title">Market News</h2>
        <span class="sub-title">Home > Market News </span>
    </div>
</section> <!-- header-title -->


<section class="single-news-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="single-news">
                    <div class="news-wrapper">
                        <img src="{{ asset('site/assets/images/single-case.jpg') }}" alt="image">

                        <div class="wrapper-content">

                            <h3>VMware Government Cloud Business <br> Sold to QTS</h3>

                            <span class="post">Hasib Sharif / 21 Feb, 2018</span>

                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distributionof letters.</p>

                            <p>Which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum genera tors on the Internet tend to repeat predefined chunks as necessary, making this the first true genera tor on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence </p>

                            <img src="{{ asset('site/assets/images/single-case.jpg') }}" alt="image">

                            <h4>Lorem Ipsum is not simply random text. </h4>

                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
                        </div> <!-- wrapper-content -->
                    </div> <!-- news-wrapper --> 
                </div> 
            </div>
        </div>
    </div>
</section>




@endsection