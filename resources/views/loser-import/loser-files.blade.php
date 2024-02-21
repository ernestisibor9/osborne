{{-- <!DOCTYPE html>
<html>
<head>
    <title> CSV Import/Export - laravelcode.com</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<div class="container" style="margin-top: 5rem;">
    @if($message = Session::get('success'))
        <div class="alert alert-info alert-dismissible fade in" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
          <strong>Success!</strong> {{ $message }}
        </div>
    @endif
    {!! Session::forget('success') !!}
    <br />
    <h2 class="text-title">Import/Export Loser Excel/CSV </h2>
    <a href="{{ route('file-import', 'xls') }}"><button class="btn btn-success">Download Excel xls</button></a>
    <a href="{{ route('file-import', 'xlsx') }}"><button class="btn btn-success">Download Excel xlsx</button></a>
    <a href="{{ route('file-import', 'csv') }}"><button class="btn btn-success">Download CSV</button></a>
    <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ route('file-export') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="file" name="import_file" />
        <button class="btn btn-primary">Import File</button>
    </form>
</div>

</body>
</html>




 --}}

@extends('layouts.admin_dashboard')

@section('content')
<style>
.x_content {
     /* background-color: lightblue; */
        /* background-image: url("img/about-bg.jpg"); */
             color:white;

}

.x_panel{
border-radius:50px 25px 50px 25px;

}
</style>
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
      <div class="x_content">
        <br>
    
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
 
<div class="container m-5" style="margin-top: 5rem;">
   
 
    <br />
    <form id="excel-csv-import-form" method="POST"  action="{{ url('file-import') }}" accept-charset="utf-8" enctype="multipart/form-data">
 
          @csrf
                   
            <div class="row">
 
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="file" name="file" placeholder="Choose file">
                    </div>
                    @error('file')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>              
  
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                </div>
            </div>     
        </form>
{{-- 
    <h2 class="text-title">Import CSV </h2>
    <a href="{{ route('file-import', 'xls') }}"><button class="btn btn-success">Download Excel xls</button></a>
    <a href="{{ route('file-import', 'xlsx') }}"><button class="btn btn-success">Download Excel xlsx</button></a>
    <a href="{{ route('file-import', 'csv') }}"><button class="btn btn-success">Download CSV</button></a> 
    <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ route('loser-import.store') }}" class="form-horizontal mr-5 ml-0" method="post" enctype="multipart/form-data"> --}}
        {{-- @csrf
        <input type="file" name="file" />
        <button class="btn btn-primary">Import File</button>
    </form>  --}}
</div>
      </div>
    </div>
  </div>
  

</div>


@endsection