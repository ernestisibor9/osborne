@extends('layouts.admin_dashboard')

@section('content')
{{-- <style>
.x_content {
     background-color: Black;
        background-image: url("img/about-bg.jpg");
             color:white;

}

.x_panel{
border-radius:50px 25px 50px 25px;

}

</style> --}}


<div class="container " style="margin-top: 5rem;">
<form action="{{ route('pdf-download.store') }}" method="POST" class="form-horizontal mr-5 ml-0" style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" enctype="multipart/form-data">


<div class="row d-flex justify-content-center">
 <div class="col-md-10 col-sm-10 mt-4 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Identity Details</h2>
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

          
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Firstname  <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="text" name="file" class="form-control">
            </div>
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Middlename <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="text" name="file" class="form-control">
            </div>
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Surname  <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="text" name="file" class="form-control">
            </div>
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Email  <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="email" name="file" class="form-control">
            </div>
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Phone<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="text" name="file" class="form-control">
            </div>
          </div>
             
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Gender <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 align-left"> 
            
              <span class="align-left mr-3 ">  
               Male: 
               <input type="radio" name="position" value="male" class="regular-checkbox">
              </span>
              
              <span>
                <label class=" align-left">Female:</label>
                <input type="radio" name="position" value="female" class="regular-checkbox">
            </span>
            
            </div>
          </div>
          
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Marital  Status <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 align-left"> 
            
              <span class="align-left mr-3 ">  
               Married - 
               <input type="radio" name="position" value="male" class="regular-checkbox">
              </span>
              
              <span>
                <label class=" align-left">Single -</label>
                <input type="radio" name="position" value="female" class="regular-checkbox">
            </span>
            
            </div>
          </div>
          
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Date of Birth <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="date" name="file" class="form-control">
            </div>
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Place of Birth <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="text" name="file" class="form-control">
            </div>
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Nationality <span class="required">*</span>
            </label>
           
            <div class="col-md-6 col-sm-6 ">
                          <select id='date-dropdown' class="form-control" placeholder="---" id="companies" name="companies">
                                <option>Select----- </option>
                                <option value="">
                                </option>
                          </select>

                          
            </div>

          </div>
          </div>
       
           
          <p>
                	<label>Nationality Status</label>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                		Resident - <input type="radio" name="nationalityStatus" checked="checked" value="Resident">
                		Non Resident - <input type="radio" name="nationalityStatus" value="Non Resident">
                		Foreigner - <input type="radio" name="nationalityStatus" value="Foreigner">
                </p>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">LGA/State of Origin <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="text" name="file" class="form-control">
            </div>
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Mother's Maiden Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="text" name="file" class="form-control">
            </div>
          </div>
             
     
          
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Occupation <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="text" name="file" class="form-control">
            </div>
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">CHN Account No <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="text" name="file" class="form-control">
            </div>
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Source of Wealth or Funds <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="text" name="file" class="form-control">
            </div>
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Employers name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="text" name="file" class="form-control">
            </div>
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Employers Address <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<textarea id="file" type="text" name="file" class="form-control"></textarea>
            </div>
          </div>
          
            <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Passport Photograph <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="file" name="file" class="form-control">
            </div>
          </div>
             
      <!--</div>-->
    </div>
  </div>
  

</div>




<div class="row d-flex justify-content-center">
 <div class="col-md-10 col-sm-10 mt-4 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Address Details</h2>
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

          
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">ASI <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="number" name="file" class="form-control">
            </div>
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Deal <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="number" name="file" class="form-control">
            </div>
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Volume <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="number" name="file" class="form-control">
            </div>
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Value <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="number" name="file" class="form-control">
            </div>
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Market Cap <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="number" name="file" class="form-control">
            </div>
          </div>
             
      </div>
    </div>
  </div>
  

</div>





<div class="row d-flex justify-content-center">
 <div class="col-md-10 col-sm-10 mt-4 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Bank Details</h2>
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

          
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">ASI <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="number" name="file" class="form-control">
            </div>
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Deal <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="number" name="file" class="form-control">
            </div>
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Volume <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="number" name="file" class="form-control">
            </div>
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Value <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="number" name="file" class="form-control">
            </div>
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Market Cap <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="number" name="file" class="form-control">
            </div>
          </div>
             
      </div>
    </div>
  </div>
  

</div>







<div class="row d-flex justify-content-center">
 <div class="col-md-10 col-sm-10 mt-4 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Next of Kin</h2>
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

          
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">ASI <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="number" name="file" class="form-control">
            </div>
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Deal <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="number" name="file" class="form-control">
            </div>
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Volume <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="number" name="file" class="form-control">
            </div>
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Value <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="number" name="file" class="form-control">
            </div>
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Market Cap <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="number" name="file" class="form-control">
            </div>
          </div>
             
      </div>
    </div>
  </div>
  

</div>







<div class="row d-flex justify-content-center">
 <div class="col-md-10 col-sm-10 mt-4 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Declaration</h2>
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

          
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">ASI <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="number" name="file" class="form-control">
            </div>
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Deal <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="number" name="file" class="form-control">
            </div>
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Volume <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="number" name="file" class="form-control">
            </div>
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Value <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="number" name="file" class="form-control">
            </div>
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Market Cap <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="number" name="file" class="form-control">
            </div>
          </div>
             
      </div>
    </div>
  </div>
  

</div>

 <div class="ln_solid"></div>
          <div class="item form-group text-center">
            <div class="col-md-6 col-sm-6 offset-md-3">
              <button type="submit" class="btn btn-success">Register</button>
            </div>
          </div>

          
        </form>
</div>

@endsection