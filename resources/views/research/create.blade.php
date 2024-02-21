@extends('layouts.admin_dashboard')

@section('content')



<style>
body {
     background-color: lightblue;
        background-image: url("img/about-bg.jpg");
}

.x_panel{
border-radius:5px;

}

th{
    background: #2A3F54;
    color:white;
}
</style>



<div class="container " style="margin-top: 1rem;">
   
    <!-- @if(session('errors'))-->
    <!--    <div class="alert alert-danger alert-icon" role="alert">-->
    <!--    <button class="close" type="button" data-dismiss="alert" aria-label="Close">-->
    <!--        <span aria-hidden="true">×</span>-->
    <!--    </button>-->
    <!--    <div class="alert-icon-aside">-->
    <!--        <i class="fa fa-times"></i>-->
    <!--    </div>-->
    <!--    <div class="alert-icon-content">-->
    <!--        <h6 class="alert-heading">Error</h6>-->
    <!--        <ul>-->
    <!--            @foreach(session('errors') as $e => $errorItem)-->
    <!--                <li>{{$errorItem}}</li>-->
    <!--            @endforeach-->
    <!--        </ul>-->
            
    <!--    </div>-->
    <!--    </div>-->
    <!--@endif-->
<form action="" method="POST" class="form-horizontal mr-5 ml-0" style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" enctype="multipart/form-data">
   <!--@if(session('success'))-->
        
    <!--@endif-->
@csrf



<!--@if(session('status'))-->


<div class="row d-flex justify-content-center">
 <div class="col-md-10 col-sm-10 mt-4 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>coporate Action</h2>
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
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Companies <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control" placeholder="---" id="" name="">
                                <option>Select----- </option>
                                <option value="">
                                </option>
                          </select>
                        </div>
                </div>
		           	
            </div>
            <!--@error('asi')-->
            <!--<span class="text-danger">{{ $message }}</span>-->
            <!--@enderror-->
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">accounting_year <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="accounting_year" type="text" name="accounting_year" class="form-control">
            </div>
            <!--@error('accounting_year')-->
            <!--<span class="text-danger">{{ $message }}</span>-->
            <!--@enderror-->
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Period <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control" placeholder="---" id="period" name="period">
                                <option>Select----- </option>
                                <option value="">
                                </option>
                          </select>
                        </div>
                </div>

            </div>
            <!--@error('volume')-->
            <!--<span class="text-danger">{{ $message }}</span>-->
            <!--@enderror-->
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="value">Dividen <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="dividend" type="text" name="dividend" class="form-control">
            </div>
            <!--@error('dividend')-->
            <!--<span class="text-danger">{{ $message }}</span>-->
            <!--@enderror-->
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="cap">Bounus <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="bonus" type="text" name="bonus" class="form-control">
            </div>
            <!--@error('bonus')-->
            <!--<span class="text-danger">{{ $message }}</span>-->
            <!--@enderror-->
          </div>
             
             
             <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="value">closure_date <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="closure_date" type="date" name="closure_date" class="form-control">
            </div>
            <!--@error('closure_date')-->
            <!--<span class="text-danger">{{ $message }}</span>-->
            <!--@enderror-->
          </div>
           <br>
           
            <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="value">agm_date <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="agm_date" type="date" name="agm_date" class="form-control">
            </div>
            <!--@error('agm_date')-->
            <!--<span class="text-danger">{{ $message }}</span>-->
            <!--@enderror-->
          </div>
           <br>
           
           
            
             <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="value">payment_date <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="payment_date" type="date" name="payment_date" class="form-control">
            </div>
            <!--@error('value')-->
            <!--<span class="text-danger">{{ $message }}</span>-->
            <!--@enderror-->
          </div>
           <br> 
      </div>
    </div>
  </div>
</div>

 <div class="ln_solid"></div>
          <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-3">
              <button type="submit" class="btn btn-success">Submite</button>
            </div>
          </div>

          
        </form>





    
        
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
              <th>companies</th>
              <th>accounting_year</th>
              <th>period</th>
              <th> dividend</th>
              <th>bonus</th>
              <th>closure_date</th>
              <th>agm_date</th>
              <th>payment_date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td scope="row">
              
                <td scope="row"></th>
                <td scope="row"></th>
                <td scope="row"></th>
                <td scope="row"></th>
                <td scope="row"></th>
                <td scope="row"></th>
                <td scope="row"></th>
                

             
              
               <td>
                   
                     <form method="POST" action=""   enctype="multipart/form-data" >
                    
                          <a class="btn btn-success btn-sm rounded-0" href="" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit">Edit</i></a>
                      
 
                        <li class="list-inline-item">
                          <button type="submit" class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash">Delete</i></button>
                        </li>


                        <!--<button type="submit"  class="btn btn-danger btn-xs mr-3 text-right"><span class="glyphicon glyphicon-trash">Delete</button> -->
                    </form>

               </td>

               
            </tr>


          </tbody>
        </table>
      
    
  </div>
  </div>
  </div>
  

</div>




</div>



@endsection