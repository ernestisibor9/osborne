@extends('layouts.site')
@push('css')
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<style>
    .table-m4{
        margin-top: 15px;
    }
</style>
@endpush
@section('content')
    <section class="page section-padding">
        <div class="container text-center">
            <h2 class="title">Corporate Action</h2>
            <span class="sub-title">Home &gt; Pages &gt; Corporate Action</span>
        </div>
    </section> 
    
   <section class="about-office-section hiring-section  section-padding">
       <div class="container">
           <div class="right-content mb-3">
               <form class="contact-form" method="POST" action="{{route('action.id')}}">
                   @csrf
                  <fieldset>
                       <legend>Corporate Action</legend>
                       <div class="row">
                           <div class="col-md-4">
                               <h4 class="text-dark text-left">Corporate</h4>
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
                       </div>
                  </fieldset>
                 <button class="btn btn-primary">  View  </button>
                </form>
           </div>
           <div class="mt-5 table-m4">
               <!--<button class="btn btn-primary"> View </button>-->
               
                <div class="table-m4 table-responsive ">
                    @if(count($corporateActionInfo) > 0)
                  <table class="table m-5 ">
                    <!--<caption><strong>Report</strong></caption>-->
                    <thead>
                        <tr>
                            <th>Company</th>
                            <th>Accounting Year</th>
                            <th>Period</th>
                            <th>Dividend</th>
                            <th>Bonus</th>
                            <th>Closure Date</th>
                            <th>AGM Date</th>
                            <th>Payment Date</th>
                        </tr>
                    </thead>
                      <tbody>
                        @foreach($corporateActionInfo as $corporateAction)  
                        <tr>
                          <!--<th scope="row"></th>-->
                          <td>{{$corporateAction->company->name}}</td>
                          <td>{{$corporateAction->accounting_year}}</td>
                          <td> {{ (
                             ($corporateAction->period == "0") ? "Full Year" :
                              (($corporateAction->period == "1") ? "1st Qrt" :
                               (($corporateAction->period == "2") ? "2nd Qrt" :
                                (($corporateAction->period == "3") ? "3rd Qrt":
                                (($corporateAction->period == "4") ? "4th Qrt": "null"))))
                             )}}</td>
                           <!--<td>{{ $corporateAction->period == "0" ? 'Full Year' : 'Testing'  }}    </td>-->
                          <td> &#8358; {{$corporateAction->dividend}}</td>
                          <td>{{$corporateAction->bonus}}</td>
                          <td>{{date('Y-m-d', strtotime($corporateAction->closure_date))}}</td>
                          <td>{{date('Y-m-d', strtotime($corporateAction->agm_date))}}</td>
                          <td>{{date('Y-m-d', strtotime($corporateAction->payment_date))}}</td>
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
