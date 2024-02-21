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

  @media print {
  .printCorporate{
    display:none;
  }
}
h1{
  color:#f6f6;
  background-color:hsl(30%,45%,60%);
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

          <div class="row gutters-sm">

            <div class="col-md-12 m-3 mt-2">
              <div class="card mb-3">




                <div class="card-body" id="printCorporate">
                  <form action="{{ route('corporate-acctForm.approval', $corporateAccountOpening->id) }}" method="POST" class="form-horizontal mr-5 ml-0" style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" enctype="multipart/form-data">

                         @csrf



                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $corporateAccountOpening->name }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       {{ $corporateAccountOpening->email }}
                    </div>
                  </div>

                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $corporateAccountOpening->phone }}
                    </div>
                  </div>

                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">CSC Account</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       {{ $corporateAccountOpening->csc_account }}
                    </div>
                  </div>

                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Incorporation Date</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $corporateAccountOpening->incorporation_date }}
                    </div>
                  </div>

                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Business Date</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                         {{ $corporateAccountOpening->business_date }}
                    </div>
                  </div>

                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Registeration No:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $corporateAccountOpening->reg_no }}
                    </div>
                  </div>

                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $corporateAccountOpening->address   }}
                    </div>
                  </div>

                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Bank Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       {{ $corporateAccountOpening->bank_name    }}
                    </div>
                  </div>

                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Account No: </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $corporateAccountOpening->acct_no }}
                    </div>
                  </div>

                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">BVN  of Directors
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $corporateAccountOpening->bvn }}
                    </div>
                  </div>

                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Board Resolution </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $corporateAccountOpening->board_resolution }}
                     <!--<a href='{{Storage::url("public/uploads/{$corporateAccountOpening->incorporation_cert}")}}' target="_blank" class="btn btn-primary me-2 mx-5 btn-floating btn-dark btn-sm btn-default"><i class="fa fa-download mr-2"></i> View  </a>-->
                    <a href='{{Storage::url("public/uploads/{$corporateAccountOpening->board_resolution}")}}' class=" me-2 mx-5 btn-floating" target="_blank"><i class="fa fa-eye" aria-hidden="true" target="_blank"></i>View</a>

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Memorandum </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                         {{ $corporateAccountOpening->memorandum }}
                        <!--<a href='{{Storage::url("public/uploads/{$corporateAccountOpening->memorandum}")}}' target="_blank" class="btn btn-primary me-2 mx-5 btn-floating btn-dark btn-sm btn-default"><i class="fa fa-download mr-2"></i> View </a>-->
                     <a href='{{Storage::url("public/uploads/{$corporateAccountOpening->memorandum}")}}' class=" me-2 mx-5 btn-floating" target="_blank"><i class="fa fa-eye" aria-hidden="true" target="_blank"></i>View</a>

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Certificate Of Incorporation</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $corporateAccountOpening->incorporation_cert }}
                        <!--<a href='{{Storage::url("public/uploads/{$corporateAccountOpening->incorporation_cert}")}}' target="_blank" class="btn btn-primary me-2 mx-5 btn-floating btn-dark btn-sm btn-default"><i class="fa fa-download mr-2"></i> View </a>-->
                    <a href='{{Storage::url("public/uploads/{$corporateAccountOpening->incorporation_cert}")}}' class=" me-2 mx-5 btn-floating" target="_blank"><i class="fa fa-eye" aria-hidden="true" target="_blank"></i>View</a>

                    </div>
                  </div>

                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Director Particular</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $corporateAccountOpening->director_particular }}
                        <!--<a href='{{Storage::url("public/uploads/{$corporateAccountOpening->director_particular}")}}' target="_blank" class="btn btn-primary me-2 mx-5 btn-floating btn-dark btn-sm btn-default"><i class="fa fa-download mr-2"></i> View  </a>-->
                    <a href='{{Storage::url("public/uploads/{$corporateAccountOpening->director_particular}")}}' class=" me-2 mx-5 btn-floating" target="_blank"><i class="fa fa-eye" aria-hidden="true" target="_blank"></i>View</a>

                    </div>
                  </div>

                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Attorney Power </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $corporateAccountOpening->attorney_power  }}
                        <!--<a href='{{Storage::url("public/uploads/{$corporateAccountOpening->attorney_power}")}}' target="_blank" class="btn btn-primary me-2 mx-5 btn-floating btn-dark btn-sm btn-default"><i class="fa fa-download mr-2"></i>  View  </a>-->
                    <a href='{{Storage::url("public/uploads/{$corporateAccountOpening->attorney_power}")}}' class=" me-2 mx-5 btn-floating" target="_blank"><i class="fa fa-eye" aria-hidden="true" target="_blank"></i>View</a>

                    </div>
                  </div>

                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">approv_letter </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $corporateAccountOpening->approv_letter }}
                        <!--<a href='{{Storage::url("public/uploads/{$corporateAccountOpening->approv_letter}")}}' target="_blank" class="btn btn-primary me-2 mx-5 btn-floating btn-dark btn-sm btn-default"><i class="fa fa-download mr-2"></i> View  </a>-->
                    <a href='{{Storage::url("public/uploads/{$corporateAccountOpening->approv_letter}")}}' class=" me-2 mx-5 btn-floating" target="_blank"><i class="fa fa-eye" aria-hidden="true" target="_blank"></i>View</a>

                    </div>
                  </div>



                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Declaration</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $corporateAccountOpening->declaration }}
                    </div>
                  </div>

                  <hr>

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
