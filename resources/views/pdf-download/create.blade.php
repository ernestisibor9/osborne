@extends('layouts.admin_dashboard')

@section('content')


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

<form action="{{ route('pdf-download.store') }}" method="POST" class="form-horizontal mr-5 ml-0" style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" enctype="multipart/form-data">

 @csrf
<div class="row d-flex justify-content-center">
 <div class="col-md-10 col-sm-10 mt-4 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Pdf</h2>
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
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">PDF <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
                <label for="file">upload File:</label>
		           	<input id="file" type="file" name="file" class="form-control">
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
        <h2>Description</h2>
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

        
              <form action="{{ route('pdf-download.store') }}" method="POST" class="form-horizontal mr-5 ml-0" enctype="multipart/form-data">
        
            <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                <div class="custom-file mr-5">

                
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Title <span class="required">*</span>
            </label>
            <div class="col-md-9 col-sm-9 ">
              <input type="text" id="title" name="name" required="required" class="form-control " required>
              </div>
          </div>
             
             
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Description <span class="required">*</span>
            </label>
            <div class="col-md-9 col-sm-9 ">
             <textarea name="description"  rows="2" col="2" placeholder="write your description"  required>
                {{ old('description') }}
             </textarea>
            </div>
          </div>
             
                    <div class="ln_solid"></div>
          <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-3">
            <input type="submit" class="btn btn-success" value='Upload PDF' />

              
            </div>
          </div>

                </div>
            </div>
          
        </form>
</div>

@endsection


