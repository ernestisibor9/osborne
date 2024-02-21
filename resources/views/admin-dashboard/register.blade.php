@extends('layouts.admin_dashboard')

@section('content')
{{-- <style>
body {
     background-color: lightblue;
        background-image: url("img/about-bg.jpg");
}

.x_panel{
border-radius:50px 25px 50px 25px;

}
</style> --}}
<div class="row d-flex justify-content-center">
 <div class="col-md-10 col-sm-10 mt-4 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Add User</h2>
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


  @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
  @endif
      <div class="x_content">
        <br>

          {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}


    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
        <form method="POST" action="{{ route('admin-dashboard.store') }}" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" enctype="multipart/form-data" autocomplete="off">
            @csrf

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first_name">First Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <input type="text" id="first_name" name="first_name" required="required" class="form-control " value="{{old('first_name')}}"  required>
            </div>
          </div>
               <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">middle Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <input type="text" id="middle_name" name="middle_name" required="required" class="form-control " value="{{old('middle_name')}}"  required>
            </div>
          </div>
            <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="middle-name">sur Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <input type="text" id="sur_name" name="sur_name" required="required" class="form-control " value="{{old('sur_name')}}" required>
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <input type="email" id="email" name="email" required="required" class="form-control " value="{{old('email')}}" required>
            </div>
          </div>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="phone">Phone <span class="required" :value="{{old('phone') }}" required>*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <input type="text" id="phone" name="phone" required="required" class="form-control ">
            </div>
          </div>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="password">Password <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <input type="password" id="password" name="password" required="required" class="form-control" autocomplete="new-password" >
            </div>
          </div>
          <div class="item form-group">
            <label for="password-confirmation" class="col-form-label col-md-3 col-sm-3 label-align"> Password Confirmation</label>
            <div class="col-md-6 col-sm-6 ">
              <input id="password_confirmation" class="form-control" type="password"  name="password_confirmation">
            </div>
          </div>


          <div class="ln_solid"></div>
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


@endsection