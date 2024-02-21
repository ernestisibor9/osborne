@extends('layouts.site')
@push('css')
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<style>
    .table-m4{
        margin-top: 15px;
    }CompanyReport

    .title-sub{
        font-size: 20px !important;
    }
</style>
@endpush
@section('content')
    <section class="page section-padding">
        <div class="container text-center">
            <h2 class="title">Company Financial Report</h2>
            <span class="sub-title">Home &gt; Pages &gt; Company Financial Report</span>
        </div>
    </section>

   <section class="about-office-section hiring-section  section-padding">
       <div class="container">
           <div class="right-content mb-3">
               <form class="contact-form" method="POST" action="{{route('financial.report')}}">
                   @csrf
                   <fieldset>
                       <legend>Company Financial Report</legend>
                       <div class="row">
                           <div class="col-md-4">
                               <h4 class="title-sub text-left">Company</h4>
                           </div>
                           <div class="col-md-8">
                               <div class="form-group">
                                   <select class="form-control" name="company_id">
                                       @foreach($companies as $company)
                                          <option value="{{$company->id}}" > {{$company->name}} </option>
                                       @endforeach
                                   </select>
                                </div>
                           </div>
                           <div class="col-md-4">
                               <h4 class="title-sub text-left">Period</h4>
                           </div>
                           <div class="col-md-4">
                               <div class="form-group">
                                   <select id="" class="form-control" placeholder="---" name="period">
                                    <option>Select Period</option>
                                    <option value="0">Full Year</option>
                                    <option value="1">1st Quarter</option>
                                    <option value="2">2nd Quarter</option>
                                    <option value="3">3rd Quarter</option>
                                    <option value="4">4th Quarter</option>
                                </select>
                                </div>
                           </div>
                           <div class="col-md-4">
                               <div class="form-group">
                                   <select id="date-dropdown" class="form-control" placeholder="---" name="year">
                                       <option>Select Year</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                    <option value="1990">1990</option>
                                    <option value="1989">1989</option>
                                    <option value="1988">1988</option>
                                    <option value="1987">1987</option>
                                    <option value="1986">1986</option>
                                    <option value="1985">1985</option>
                                    <option value="1984">1984</option>
                                    <option value="1983">1983</option>
                                    <option value="1982">1982</option>
                                    <option value="1981">1981</option>
                                    <option value="1980">1980</option>
                                </select>
                                </div>
                           </div>
                       </div>
                  </fieldset>
                  <button class="btn btn-primary">Get Report</button>
                </form>
           </div>

           <div class="mt-5 table-m4">
                <div class="table-m4 table-responsive ">
                    @if(count($companyReports) > 0)
                  <table class="table m-5 ">
                    <!--<caption><strong>Report</strong></caption>-->
                    <thead>
                        <tr>
                            <th>Company Name</th>
                             <th>Period</th>
                            <th>Title</th>
                            <th>Document</th>
                        </tr>
                    </thead>
                      <tbody>
                          @foreach($companyReports as $companyReport)
                        <tr>
                          <td>{{$companyReport->company->name}}</td>
                          <td>{{ (
                             ($companyReport->period == "0") ? "Full Year" .' '. $companyReport->year :
                              (($companyReport->period == "1") ? "1st Qrt" .' '. $companyReport->year :
                               (($companyReport->period == "2") ? "2nd Qrt" .' '. $companyReport->year :
                                (($companyReport->period == "3") ? "3rd Qrt" .' '. $companyReport->year:
                                (($companyReport->period == "4") ? "4th Qrt" .' '. $companyReport->year : "null"))))
                             )}}</td>
                          <td>{{$companyReport->title}}</td>
                          <td> <a href='{{Storage::url("public/uploads/{$companyReport->document}")}}' target="_blank"> View </a></td>
                        </tr>
                        @endforeach
                      </tbody>
                  </table>
                  @else
                  <p> No Information found for the company </p>
                  @endif
                </div>
           </div>


       </div>
   </section>
@endsection
