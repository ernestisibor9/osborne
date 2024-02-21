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
        <br>

        <form action="{{ route('company_report.update', $companyReport->id) }}" method="POST" class="form-horizontal mr-5 ml-0" style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" enctype="multipart/form-data">
          @csrf
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Companies <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <select class="form-control @error('company_id') is-valide
                              
              @enderror" placeholder="---" id="company_id" name="company_id">
              @foreach ($companies as $company)
                    <option @if($companyReport->company_id == $company->id) selected @endif value="{{ $company->id }}">
                    {{ $company->name  }}
                    </option>
                @endforeach
              </select>

              @error('category_id')
                  <div class="alert alert-danger"></div>
              @enderror
                        
            </div>
          
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Title <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="title" type="text" name="title" value="{{ $companyReport->title }}" class="form-control">
            </div>
           
          </div>

           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Document <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">  
		           	<input id="document" type="file" value="{{ $companyReport->document }}" name="document" class="form-control">
            </div>
            
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="value">Period <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
                <div class="form-group">
                            <select id='' type="text" class="form-control" placeholder="---" id="" name="period" value="{{ $companyReport->period }}">
                                <option>Select----- </option>
                                <option @if($companyReport->period ==0) selected @endif  value="0">Full Year</option>
                                <option @if($companyReport->period ==1) selected @endif  value="1">1st Quarter </option>
                                <option @if($companyReport->period ==2) selected @endif  value="2">2nd Quarter </option>
                                <option @if($companyReport->period ==3) selected @endif  value="3">3rd Quarter </option>
                                <option @if($companyReport->period ==4) selected @endif  value="4">4th Quarter </option>
                          </select>
                          
         
                </div>

            </div>
           
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="cap">Year <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <select id="date-dropdown" type="text" class="form-control" placeholder="---" id="" name="year" value="{{ $companyReport->year }}">
                            <!-- <option>Select----- </option>-->
                            <!--@for($i=date('Y'); $i>=1970; $i--)-->
                            <!--<option value="">{{$i}}</option>-->
                            <!--@endfor-->
                </select>
                
                                         <script>
                    let dateDropdown = document.getElementById('date-dropdown'); 
                        
                    let currentYear = new Date().getFullYear();    
                    let earliestYear = 1980;     
                    while (currentYear >= earliestYear) {      
                      let dateOption = document.createElement('option');          
                      dateOption.text = currentYear;      
                      dateOption.value = currentYear;        
                      dateDropdown.add(dateOption);      
                      currentYear -= 1;    
                    }
                  </script>
                          
            </div>
                           
                   
          </div>
             
             
          <div class="ln_solid"></div>
          <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-3">
              <button type="submit" class="btn btn-success">Update</button>
            </div>
          </div>

          
        </form>
      </div>
    </div>
  </div>
  

</div>

 
</div>

@endsection