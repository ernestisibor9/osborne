@extends('layouts.admin_dashboard')

@section('content')



<div class="container " style="margin-top: 1rem;">

<div class="row d-flex justify-content-center">
 <div class="col-md-10 col-sm-10 mt-4 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Coporate Action</h2>
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

          
<form action="{{ route('corporate_action.store') }}" method="POST" class="form-horizontal mr-5 ml-0" style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" enctype="multipart/form-data">
 
@csrf


           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Companies <span class="required">*</span>
            </label>
           <div class="col-md-6 col-sm-6 ">
              <select class="form-control @error('company_id') is-valide
                              
              @enderror" placeholder="---" id="company_id" name="company_id" value="{{ old('company_id') }}">
              @foreach ($companies as $company)
                    <option @if(old('company_id') == $company->id) selected @endif value="{{ $company->id }}">
                    {{ $company->name  }}
                    </option>
                @endforeach
              </select>
        
                
            @error('company_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
                        
            </div>
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Accounting Year <span class="required">*</span>
            </label>
            <!--<div class="col-md-6 col-sm-6 ">-->
		           	<!--<input id="accounting_year" type="text" name="accounting_year" class="form-control">-->
           <div class="col-md-6 col-sm-6 ">
              <select id="date-dropdown" class="form-control" placeholder="---" id="" name="accounting_year" >
                            <!--    <option>Select----- </option>    -->
                            <!--@for($i=date('Y'); $i>=1970; $i--)-->
                            <!--<option value="{{$i}}">{{$i}}</option>-->
                            <!--@endfor-->
                </select>
             
            @error('year')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
                           
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
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Period <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
                <div class="form-group">
                          <select id='' class="form-control" placeholder="---" id="" name="period" value="{{ old('period') }}">
                                <option>Select----- </option>
                                <option value="0">Full Year</option>
                                <option value="1">1st Quarter</option>
                                <option value="2">2nd Quarter</option>
                                <option value="3">3rd Quarter</option>
                                <option value="4">4th Quarter</option>
                          </select>
                
                </div>

              
            @error('period')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="value">Dividend <span class="required"></span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="dividen" type="text" name="dividend" value="{{ old('dividend') }}" class="form-control">
            </div>
            @error('dividen')
            <div class="alert alert-danger">{{ $message }}</div> 
            @enderror
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="cap">Bounus <span class="required"></span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="bonus" type="text" name="bonus" value="{{ old('bonus') }}" class="form-control">
            </div>
            @error('period')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
             
             
             <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="value">Closure Date <span class="required"></span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="closure_date" type="date" name="closure_date" value="{{ old('closure_date') }}" class="form-control">
            </div>
             @error('closure_date')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
           <br>
           
            <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="value">AGM Date <span class="required"></span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="agm_date" type="date" name="agm_date" value="{{ old('agm_date') }}" class="form-control">
            </div>
            @error('agm_date')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
           <br>
           
           
            
             <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="value">Payment Date <span class="required"></span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="payment_date" type="date" name="payment_date" value="{{ old('payment_date', date('m-d-Y')) }}" class="form-control">
            </div>
            @error('payment_date')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
           <br> 
             
           
           <div class="ln_solid"></div>
          <div class="item form-group text-center">
            <div class="col-md-6 col-sm-6 offset-md-3">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </div>

          
        </form>
      </div>
      
      
      
    </div>
  </div>
  

</div>

</div>









        
 <div class="row d-flex justify-content-center mt-4">

  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel mt-4 ">
    
      <div class="x_title">
        <h2>View Record</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Settings 1</a>
                <a class="dropdown-item" href="#">Settings 2</a>
              </div>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
     
      </div>

      <div class="x_content ">
  <div class="table-responsive">

        <table class="table ">
          <thead>
            <tr>
              <th>#</th>
              <th>Companies</th>
              <th>Accounting Year</th>
              <th>Period</th>
              <th>Dividend</th>
              <th>Bonus</th>
              <th>Closure_date</th>
              <th>AGM Date</th>
              <th>Payment Date</th>
              <th>Action</th>
            </tr>


          </thead>
          <tbody>
        @php
            $periodCollection = [0=>'Full Year', 1=>'1st Qrt', 2=>'2nd Qrt', 3=>'3rd Qrt', 4=>'4th Qrt'];
        @endphp
        @foreach ($corporateActions as $corporateAction)
            <tr>
                <td scope="row">{{++$loop->index  }}</td>
                <td scope="row">{{$corporateAction->company->name  }}</td>
                <td scope="row">{{$corporateAction->accounting_year  }}</td>
                <td scope="row">{{$periodCollection[$corporateAction->period]}}</td>
                <td scope="row">{{$corporateAction->dividend  }}</td>
                <td scope="row">{{$corporateAction->bonus  }}</td>
                <td scope="row">{{$corporateAction->closure_date  }}</td>
                <td scope="row">{{$corporateAction->agm_date  }}</td>
                <td scope="row">{{$corporateAction->payment_date  }}</td>
               
                
                <td>
                 <!--<form action="{{ route('corporate_action.destroy',$corporateAction->id) }}" method="POST">-->


                 <!--       <a class="btn btn-primary btn-xs mr-3" href="{{ route('corporate_action.edit',$corporateAction->id) }}"><span class="glyphicon glyphicon-pencil"></span>Edit</a>-->

                 <!--       @csrf-->
                 <!--       @method('DELETE')-->

                 <!--       <button type="submit"  class="btn btn-danger btn-xs ml-3"><span class="glyphicon glyphicon-trash">Delete</button>-->
                 <!--   </form>-->
                   
                   
                    <a class="btn btn-success btn-sm rounded-0" href="{{ route('corporate_action.edit', $corporateAction->id) }} " type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit">Edit</i></a>
    
                   
                <form method="POST" action="{{ route('corporate_action.destroy', $corporateAction->id) }}"   enctype="multipart/form-data" >
                 

                    
                  
                   @csrf
                        @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete" ><i class="fa fa-trash">Delete</i></button>
                      </form>
               </td>

               
            </tr>
          @endforeach

          </tbody>
        </table>
      
    
  </div>
  </div>
  </div>
  

</div>
           


@endsection