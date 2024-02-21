

@extends('layouts.site')
@section('content')

<section class="page section-padding">
    <div class="container text-center">
        <h2 class="title">Contact</h2>
        <span class="sub-title">Home > Contact </span>
    </div>
</section> <!-- header-title -->



<section class="contact-section section-padding">
    <div class="container">
        <div class="contact-wrapper">
            <div class="section-title text-center">

{{-- 


    <section class="service-page-section section-padding">
        <div class="container">
 --}}

      <div class="clearfix"></div>
      
      <div class="x_content ">
      <div class="row ">

        <table class="table">
          <thead>
           <tr> 
            <th >S/N</th>
            <th >File Type</th>
            <th >File Title</th>
            <th >Description</th>
            <th >Action</th>
             </tr>
          </thead>
          <tbody>
   
                    <p>{{ $data->name }}</p>
                    <p>{{ $data->description }}</p>
                            

    <iframe src="/assets/{{ $data->file }}"></iframe>

          </tbody>
        </table>



        <d/iv>
        <d/iv>
    </div>
</div>
           </section>

@endsection


