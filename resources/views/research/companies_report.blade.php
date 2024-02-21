@extends('layouts.admin_dashboard')

@section('content')



<div class="container " style="margin-top: 1rem;">

<form action="" method="POST" class="form-horizontal mr-5 ml-0" style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" enctype="multipart/form-data">
 
@csrf

<div class="row d-flex justify-content-center">
 <div class="col-md-10 col-sm-10 mt-4 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>companies Reports</h2>
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
                  <select class="form-control" placeholder="---" id="companies" name="companies">
                        <option>Select----- </option>
                        <option value="">
                        </option>
                  </select>
                        
            </div>
          
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Title <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="title" type="text" name="title" class="form-control">
            </div>
           
          </div>

           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Document <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="document" type="file" name="document" class="form-control">
            </div>
            
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="value">Period <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
                <div class="form-group">
                          <select id='' class="form-control" placeholder="---" id="" name="">
                                <option>Select----- </option>
                                <option value="">Full Year</option>
                                <option value="">1st Quarter</option>
                                <option value="">2nd Quarter</option>
                                <option value="">3rd Quarter</option>
                                <option value="">4th Quarter</option>
                          </select>
                          
         
                </div>

            </div>
           
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="cap">Year <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <select id='date-dropdown' class="form-control" placeholder="---" id="" name="">
                                <option>Select----- </option>
                                <option value="">
                                </option>
                </select>
                          
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
              <th>Title</th>
              <th>Document</th>
              <th>Period</th>
              <th>Year</th>
             
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
                   
                     <!--<form method="POST" action=""   enctype="multipart/form-data" >-->
                    
                     <!--     <a class="btn btn-success btn-sm rounded-0" href="" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit">Edit</i></a>-->
                      
 
                     <!--   <li class="list-inline-item">-->
                     <!--     <button type="submit" class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash">Delete</i></button>-->
                     <!--   </li>-->


                        <!--<button type="submit"  class="btn btn-danger btn-xs mr-3 text-right"><span class="glyphicon glyphicon-trash">Delete</button> -->
                    <!--</form>-->

               </td>

               
            </tr>


          </tbody>
        </table>
      
    
  </div>
  </div>
  </div>
  

</div>
           

@endsection