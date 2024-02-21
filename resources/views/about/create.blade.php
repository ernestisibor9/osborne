@extends('layouts.admin_dashboard')

@section('content')
{{-- <style>
body {
     background-color: lightblue;
        background-image: url("img/about-bg.jpg");
}

.x_panel{
border-radius:7px;

}
</style> --}}
<div class="row d-flex justify-content-center">
 <div class="col-md-10 col-sm-10 mt-4 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Create About Us Info</h2>
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
        <form method="POST" action="{{ route('about.store') }}" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" enctype="multipart/form-data" autocomplete="off">
            @csrf
  
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="title"> Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <input type="text" id="title" name="name" required="required" class="form-control " value="{{ old('name') }}" required>
            </div>
          </div>



            <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="title"> description <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <textarea type="text" name="description" class="form-control @error('description') is-invalid @enderror" rows="3" col="3" placeholder="create your company description" value="{{ old('name') }}" required></textarea>

              @error('description')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror

          {{-- <textarea type="text" name="description" class="form-control" rows="10" col="10" placeholder="write your company description" value="{{ old('description') }}" required></textarea> --}}
                 
            </div>
          </div>

         
{{--       
          <div class="ln_solid"></div> --}}
          <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-3">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
  

</div>
<br>
<br>
<br>

@endsection