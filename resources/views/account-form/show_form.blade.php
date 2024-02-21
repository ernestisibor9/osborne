@extends('layouts.admin_dashboard')

@section('content')
<style>
    .print-button {
  text-align: center;
  
  &__content {
    display: inline-block;
    cursor: pointer;
    margin-top: 1em;
    padding: .5em 1em;
    color: white;
    text-decoration: none;
    font-size: 25px;
    border-radius: 3px;
    transition: .3s;
    background: #a60b0f;
    
    &:hover {
      background-color: #c40004;
    }
  }
  
}
</style>
<div class="row d-flex justify-content-center mt-4">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel mt-4 ">
      <div class="x_title">
        <h2>View Users</h2>
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

               <div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">User</a></li>
              <li class="breadcrumb-item active" aria-current="#">Client Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
     <form action="{{ route('form.approval', $accountOpening->id) }}" id="printCorporate" method="POST" class="form-horizontal mr-5 ml-0" style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" enctype="multipart/form-data">
                        
                         @csrf
                        
   
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img 
                    src='{{Storage::url("public/uploads/{$accountOpening->passport}")}}'

                    
                    alt="Admin" class="img-thumbnail rounded-circle" width="150" height="150">

                    <div class="mt-3">
                      <!--<h4>John Doe</h4>-->
                      <!--<p class="text-secondary mb-1">Full Stack Developer</p>-->
                      <!--<p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>-->
                      <!--<button class="btn btn-primary">Follow</button>-->
                      <!--<button class="btn btn-outline-primary">Message</button>-->
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">

              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">


 
                  
                <div class="card-body">
                 
              
              
                     <!--@foreach ($accountOpens as $accountOpen)-->
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $accountOpening->first_name }} {{ $accountOpening->middle_name }} {{ $accountOpening->last_name }}            
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       {{ $accountOpening->email }}                   
                    </div>
                  </div>
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $accountOpening->phone }}                  
                    </div>
                  </div>
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Marital Status</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       {{ $accountOpening->marital_status }}        
                    </div>
                  </div>
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Wedding Anniversary</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       {{ $accountOpening->wedding_anniversary }}        
                    </div>
                  </div>
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date Of Birth</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $accountOpening->dob }}
                    </div>
                  </div>
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nationality</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                         {{ $accountOpening->nationality }}           
                    </div>
                  </div>
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nationality Status</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $accountOpening->nationality_status }}           
                    </div>
                  </div>
                  @if($accountOpening->state_of_origin)
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">State of Origin</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $accountOpening->state_of_origin }}           
                    </div>
                  </div>
                  @endif
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mother Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $accountOpening->mother_name}}       
                    </div>
                  </div>
                  
                  <!--<hr>-->
                  <!--<div class="row">-->
                  <!--  <div class="col-sm-3">-->
                  <!--    <h6 class="mb-0">Passport</h6>-->
                  <!--  </div>-->
                  <!--  <div class="col-sm-9 text-secondary">-->
                  <!--     <img src="{{Storage::url("public/uploads/{$accountOpening->passport}")}}">         -->
                  <!--  </div>-->
                  <!--</div>-->
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Proof Identity</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $accountOpening->proof_identity }} 
                        <a href='{{Storage::url("public/uploads/{$accountOpening->proof_address}")}}' class=" me-2 mx-5 btn-floating" target="_blank"><i class="fa fa-eye" aria-hidden="true" target="_blank"></i>View</a>
                        <!--<a href='{{Storage::url("public/uploads/{$accountOpen->proof_address}")}}' target="_blank" class="btn btn-primary me-2 mx-5 btn-floating btn-dark btn-sm btn-default"><i class="fa fa-download mr-2"></i> View  </a>-->

                    </div>
                  </div>
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">  
                      <h6 class="mb-0">Residence Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $accountOpening->residence_address }}     
                    </div>
                  </div>
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Proof Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                         {{ $accountOpening->proof_address }} 
                         <a href='{{Storage::url("public/uploads/{$accountOpening->proof_address}")}}' class=" me-2 mx-5 btn-floating" target="_blank"><i class="fa fa-eye" aria-hidden="true" target="_blank"></i>View</a>
                    <!--<a href='{{Storage::url("public/uploads/{$accountOpen->proof_address}")}}' target="_blank" class="btn btn-primary me-2 mx-5 btn-floating btn-dark btn-sm btn-default"><i class="fa fa-download mr-2"></i> View  </a>-->

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Permanent Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $accountOpening->permanent_address }}     
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Bank Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                         {{ $accountOpening->bank_name }}        
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Account_no</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $accountOpening->account_no }}       
                    </div>
                  </div>
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">BVN</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $accountOpening->bvn }}        
                    </div>
                  </div>
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">NextOfKin Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $accountOpening->nextOfKin_name  }}                   
                    </div>
                  </div>
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">NextOfKin Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $accountOpening->nextOfKin_phone }}                
                    </div>
                  </div>
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">NextOfKin Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $accountOpening->nextOfKin_address}}                   
                    </div>
                  </div>
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Signature</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                         
                        <img src='{{Storage::url("public/uploads/{$accountOpening->signature}")}}' style="width:100%">                      
                    </div>
                  </div>
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                                 {{ $accountOpening->gender}}        
                    </div>
                  </div>
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Declaration</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $accountOpening->declaration }}       
                    </div>
                  </div>
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">CSCS_NO</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $accountOpening->cscs_no }}                   
                    </div>
                  </div>
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">NIN NO</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $accountOpening->nin }}                   
                    </div>
                  </div>
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Next Of Kin Relationship</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $accountOpening->nextOfKinRelationship }}       
                    </div>
                  </div>
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Next Of Kin Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $accountOpening->nextOfKinEmail }}       
                    </div>
                  </div>
                 
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Last Political Appointment and Date</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $accountOpening->political_exposure }}       
                    </div>
                  </div>
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Employer Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $accountOpening->employer_name  }}        
                    </div>
                  </div>
                 
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Employer Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $accountOpening->employer_address}}        
                    </div>
                  </div>
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Position In Organization</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $accountOpening->position_in_organization}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Self Employed</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $accountOpening->self_employed}}
                    </div>
                  </div>
                  <hr>

                              
                    <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="offset-md-3 text-center">
                          <button type="submit" class="btn btn-success btn-lg">Open</button>
                        </div>
                      
            
                      
        <!--</form>-->
                     <div class="col-sm-6 text-center">
                         <span class="print-button__content  js__action--print" title="Print this page">
                      <button class="btn btn-warning btn-lg" onclick="printDiv('printCorporate')" value="print a div!""><i class="fa fa-print"></i> Print</button>
                      <a class="btnprn btn">
                    <script>
                        
                        function printDiv(printCorporate) {
                         var printContents = document.getElementById(printCorporate).innerHTML;
                         var originalContents = document.body.innerHTML;
                    
                         document.body.innerHTML = printContents;
                    
                         window.print();
                    
                         document.body.innerHTML = originalContents;
                    }
                    </script>
                    

                <!--@endforeach-->
                    </div>
                    </div>
            </form>
                  </div>
                  
                </div>
              </div>
              </div>
              </div>
              </div>
              </div>

               
               
              
              
              
        </div>
      </div>
    </div>
  </div>
  

</div>


@endsection
