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
@if(session('status'))

<div class="alert alert-success" role="alert">
  {{ session('status') }}
</div>

@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('dailymarket.upload') }}" method="POST" class="form-horizontal mr-5 ml-0" style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" enctype="multipart/form-data">

 @csrf
<div class="row d-flex justify-content-center">
 <div class="col-md-10 col-sm-10 mt-4 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Date</h2>
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
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Transaction Date <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="date" name="date" class="form-control">
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
        <h2>Add Losers</h2>
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
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Loser file <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="file" name="losers" class="form-control">
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
        <h2>Add Gainers</h2>
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
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Gainers File <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="file" name="gainers" class="form-control">
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
        <h2>Add price List</h2>
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
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">PriceList File <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="file" type="file" name="priceLists" class="form-control">
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
        <h2>Market Sumary</h2>
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
		           	<input step='0.01' id="file" type="number" name="asi" class="form-control">
            </div>
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Deal <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input step='0.01' id="file" type="number" name="deal" class="form-control">
            </div>
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Volume <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input step='0.01' id="file" type="number" name="volume" class="form-control">
            </div>
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Value <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input step='0.01' id="file" type="number" name="value" class="form-control">
            </div>
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Market Cap <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input step='0.01' id="file" type="number" name="marketCap" class="form-control">
            </div>
          </div>
          <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Bond Cap <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input step='0.01' id="file" type="number" name="bond_cap" class="form-control">
            </div>
          </div>
          <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">ETF Cap <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">  
		           	<input step='0.01' id="file" type="number" name="etf_cap" class="form-control">  
            </div>
          </div>

      </div>
    </div>
  </div>


</div>

 <div class="ln_solid"></div>
          <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-3">
              <button type="submit" class="btn btn-success">Upload Data</button>
            </div>
          </div>


        </form>
</div>

@endsection
