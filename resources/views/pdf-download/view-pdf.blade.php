{{-- 

@extends('layouts.site')
@section('content')

<section class="page section-padding">
    <div class="container text-center">
     
    </div>
</section> <!-- header-title -->



<section class="contact-section section-padding">
    <div class="container">
     
                    {{-- <p>{{ $data->name }}</p>
                    <p>{{ $data->description }}</p> --}}
                            

    {{-- <iframe style="width: 1000px; height: 1500px;" src="/assets/{{ $data->file }}"></iframe> --}}

{{--     
       </div>
           </section> --}}

{{-- @endsection  --}}


<!doctype html>
  
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My PDF Viewer</title>
</head>
<body>


     
             {{-- <iframe style="width: 1000px; height: 1500px;"></iframe> --}}
<div style="text-align:center">
<h4>Osborn Pdf viewer</h4>
<iframe src="/assets/{{ $data->file }}" frameborder="0" height="1500px" width="100%"></iframe>
  </div>
</body>
</html>