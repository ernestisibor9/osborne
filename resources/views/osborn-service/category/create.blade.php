@extends('layouts.admin_dashboard')

@section('content')

<div class="row d-flex justify-content-center">
 <div class="col-md-10 col-sm-10 mt-4 ">
    <div class="x_panel">
      
      @if (count($errors) > 0)
      @foreach ($errors->all() as $error)
          <span class="alert alert-danger">{{ $error }}</span>
      @endforeach
          
      @endif
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
      <div class="x_content">
        <br>
        <form method="POST" action="{{ route('category.store') }}" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" enctype="multipart/form-data" autocomplete="off">
            @csrf
  
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Category Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <textarea type="text" name="name" class="form-control @error('name') is-invalid @enderror" rows="3" col="3" placeholder="create your news category" value="{{ old('name') }}" required></textarea>

              @error('name')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              {{-- <input type="text" id="name" name="name" required="required" class="form-control " value="{{ old('name') }}" required> --}}
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