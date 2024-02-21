@extends('layouts.admin_dashboard')

@section('content')




<div class="container " style="margin-top: 1rem;">


<div class="row d-flex justify-content-center">
 <div class="col-md-10 col-sm-10 mt-4 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>companies Report</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a class="dropdown-item" href="#">Settings 1</a>
              </li>
              <li><a class="dropdown-item" href="#">Settings 2</a>
              </li>
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
    <div class="x_content">
        <section class="content invoice">
        <br>
        <h1>
            <i class="fa fa-globe"></i> Company Report.
        
        <br>
        
        <small class="pull-left">Date: </small>
    </h1>
    <br>
    <br>
    <br>
    <br>
    <br>
{{-- 
        <form action="{{ route('company_report.update', $CompanyReport->id) }}" method="POST" class="form-horizontal mr-5 ml-0" style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" enctype="multipart/form-data">
 
          @csrf --}}
          @foreach ($CompanyReports as $CompanyReport)
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Companies <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
             <p>
                {{ $CompanyReport->company->name }}
             </p>
            </div>
          
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Title <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
             <p> 
                {{ $CompanyReport->company->name }}
             </p>
            </div>
           
          </div>

           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Document <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
               <p> 
                {{ $CompanyReport->title }}    
               </p>		           
            </div>
            
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="value">Period <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
               <p> 
                {{ $CompanyReport->document }}
               </p>

            </div>
           
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="cap">Year <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <p> 
                {{ $CompanyReport->period }}    
              </p>
            </div>
                           
                   
          </div>

           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="cap">Year <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <p> 
                {{ $CompanyReport->year }}   
              </p>
            </div>
                           
                   
          </div>


             @endforeach
{{--              
          <div class="ln_solid"></div>
          <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-3">
              <button type="submit" class="btn btn-success">Submite</button>
            </div>
          </div> --}}

          
        {{-- </form> --}}


        
              <!-- this row will not appear when printing -->
              <div class="row no-print text-center">
                <div class="col-xs-12 text-center">
                  <button class="btn btn-info" onclick="window.print();" style="margin-right: 5px;"><i class="fa fa-print"></i> Print</button>
                  {{-- <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
                  <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button> --}}
                </div>
              </div>
            </section>

      </div>
    </div>
  </div>
  

</div>

 
</div>
</div>


@endsection