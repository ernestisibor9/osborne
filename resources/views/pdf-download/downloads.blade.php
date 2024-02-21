

@extends('layouts.site')
@section('content')
<style>
    .btn {
/* background-color: #062DA3; */
  border: solid white 5px;
  border-radius: 75%;
  color: rgb(105, 91, 91);
  padding: 12px 30px;
  cursor: pointer;
  /* font-size: 20px; */
}
</style>
<section class="page section-padding">
    <div class="container text-center">
        <h2 class="title">Download</h2>
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
          <thead class="text-lg-start fw-bolder" style=" color: #fff; background-color: #062DA3; border-color: #792700;">
           <tr>
            <th class="text-lg-start fw-bolder">S/N</th>
            <th >

          <!--      <li class="nav-item">-->
          <!--  <a id="docs-tab-overview" class="nav-link active px-5 font-weight-bold" data-mdb-toggle="tab"  role="tab">Overview</a>-->
          <!--</li>-->
            </th>
            <th class="text-lg-start fw-bolder" ><span  class="">Title</span></th>
            <th class="text-lg-start fw-bolder"><span  class="">Description</span></th>
            <th class="text-lg-start fw-bolder"><span  class="">Download</span></th>

             </tr>  
          </thead>
          <tbody>
          @foreach ($data as $data)
                <tr style="text-align: left">
                  	<td>{{ ++$loop->index }}</td>
                    <td></td>
                    <td>{{ $data->name }}</td>
                    <td>{{ strip_tags($data->description) }}</td>
                    <td class="">
                        <!--<button class="btn me-2 btn-primary btn-sm" >    -->
                        <!--    <a  href="{{ url('view', $data->id) }}" target="_blank" role"button" style="text-decoration: blink; color:#fff"><i class="fa fa-download" style="text-decoration: blink; color:#fff"></i>View</a>-->
                        <!--</button>-->
                            <!--<a  href="{{ url('view', $data->id) }}" target="_blank" role"button" ><i class="fa fa-download" style="text-decoration: blink; color:#fff"></i>View</a>-->
                    <!--<button class="btn ">-->
                        <a href="{{ url('view', $data->id) }}"><i class="fa fa-eye" aria-hidden="true" target="_blank"></i> View </a>


                <!--</button>-->
                    </td>

                    {{-- <td class=""> --}}
                        <!--<button class="btn me-2 btn-primary btn-sm" >    -->
                        <!--     <a  href="{{ url('/pdfDownload', $data->file) }}" target="_blank" role"button" style="text-decoration: blink; color:#fff"><i class="fa fa-download" style="text-decoration: blink; color:#fff"></i>Download</a>-->
                        <!--</button>-->
                             <!--<a  href="{{ url('/pdfDownload', $data->file) }}" target="_blank" role"button" ><i class="fa fa-download" style="text-decoration: blink; color:#fff"></i>Download</a>-->
                    <!--<button class="btn ">    -->
                            {{-- <a  href="{{ url('/pdfDownload', $data->file) }}" target="_blank"><i class="fa fa-download text-white"></i>Download</a> --}}
                        <!--</button>-->
                    </td>

                    {{-- <td><a href="{{ url('download-pages') }}">Download</a></td> --}}
                </tr>

          @endforeach

          </tbody>
        </table>



    </div>
    </div>
    </div>
</div>
           </section>

@endsection


