@extends('layouts.site')
@section('content')

        <section class="page section-padding">
            <div class="container text-center">
                <h2 class="title">Core Values</h2>
            </div>
        </section> <!-- header-title -->


        <style>
            .badge-container{
                width: 70px;
                height: 70px;
                margin: 15px auto;
                background: #052B90;
                border-radius: 50%;
                line-height: 70px;
                text-align: center;
            }

            .badge-container i{
                color:#fff;
                font-size: 25px;
            }

            .badge-container + h3 + p,
            .badge-container + h3{
                text-align: center;
            }
        </style>


        <section class="service-page-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                       <div class="badge-container">
                            <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                       </div>
                       <h3>PROFESSIONALISM</h3>
                       <p>
                        We believe passionately in what we do and will never compromise our standards and values
                       </p>
                    </div>
                    <div class="col-sm-4">
                        <div class="badge-container">
                            <i class="fa fa-handshake-o" aria-hidden="true"></i>
                        </div>
                        <h3>INTEGRITY</h3>
                        <p>
                            Every action or decision we take is firmly anchored on honesty and sincerity of purpose.
                        </p>
                     </div>
                     <div class="col-sm-4">
                        <div class="badge-container">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </div>
                        <h3>PASSION</h3>
                        <p>
                            The energy that drives us and brings out the best in us.
                        </p>
                     </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                        <div class="badge-container">
                            <i class="fa fa-bookmark"></i>
                        </div>
                        <h3>EXCELLENCE</h3>
                        <p>
                            We continually strive to improve people, systems and processes. To us, excellence is a habit and means doing ordinary things extraordinarily well.
                        </p>
                     </div>
                </div>
            </div>
        </section> <!-- service-page-section -->
@endsection
