@extends('layouts.site')
@section('content')

<section class="page section-padding">
    <div class="container text-center">
        <h2 class="title">Contact</h2>
        <span class="sub-title">Home > Contact </span>
    </div>
</section> <!-- header-title -->




<section class="map-section">
    <h2 class="hidden">title</h2>

    <!--<div>-->
    <!--    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15857.786742275477!2d3.425069!3d6.464958!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf4b7a3694879%3A0x9d029a567f85c83c!2sOSBORNE%20FORESHORE%20ESTATE!5e0!3m2!1sen!2sng!4v1621261635459!5m2!1sen!2sng" width="1600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>-->
    <!--</div>-->
</section>



<section class="contact-section section-padding">
    <div class="container">
        <div class="contact-wrapper">
            <div class="section-title text-center">
                <h2>Drop us a line</h2>
                <p>Please contact us using the information below. For additional <br> information please visit the appropriate page on our site.</p>
            </div> <!-- section-title -->

            @if(session('success'))
            <div class="alert alert-success p-3 mr-5 b">
                {{ session('success') }}
            </div>
          @endif

          @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="row">
                <div class="col-md-6">
                    <div class="form-section">
                        <form method="Post" action="{{ route('email.ContactMail') }}" class="contact-form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input id="name" name="name" type="text" class="form-control"  required="" placeholder="Full Name">
                            </div>

                            <div class="form-group">
                                <input class="domainSearchBar form-control" id="email" name="email" type="email" required="" placeholder="Email">
                            </div>

                            <div class="form-group">
                                <input id="last-name" name="location" type="text" class="form-control"  required="" placeholder="Location">
                            </div>

                            <div class="form-group">
                                <textarea id="message" name="message" class="form-control form-message" rows="4" required="" placeholder="Write.."></textarea>
                            </div>

                            <div class="form-group">
                              {!! NoCaptcha::renderJs() !!}
                              {!! NoCaptcha::display() !!}
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div> <!-- mail-section -->
                </div>

                <div class="col-md-6">
                    <ul class="location">
                        <li>
                            <i class="fa fa-road" aria-hidden="true"></i>

                            <div class="text">2A, Idanre Close,
                                Off Ogun Street,
                                Osborne Foreshore Estate,
                                Ikoyi, Lagos.</div>
                        </li>

                        <li>
                            <i class="fa fa-volume-control-phone" aria-hidden="true"></i>

                            <div class="text">01-291-4775</div>
                            <div class="text">08036-348644 </div>
                            <div class="text">0907- 8081916</div>
                        </li>

                        <li>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>

                            <div class="text">info@ocmlng.com</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> <!-- contact-->

@endsection
