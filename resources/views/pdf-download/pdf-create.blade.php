@extends('layouts.admin_dashboard')

@section('content')
<div class="row d-flex justify-content-center">
    @if(session('success'))
    
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    
    @endif
    
        @if($message = Session::get('success'))
        <div class="alert alert-info alert-dismissible fade in" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
          <strong>Success!</strong> {{ $message }}
        </div>
    @endif
    {!! Session::forget('success') !!}
 <div class="col-md-10 col-sm-10 mt-4 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Upload file</h2>
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
 
<div class="container " style="margin-top: 5rem;">
  
<div class="card-body">

 {{-- <a href="{{ route('gainer-export', 'xls') }}"><button class="btn btn-success">Download Excel xls</button></a>
    <a href="{{ route('gainer-export', 'xlsx') }}"><button class="btn btn-success">Download Excel xlsx</button></a>
    <a href="{{ route('gainer-export', 'csv') }}"><button class="btn btn-success">Download CSV</button></a> --}}

        <form action="{{ route('pdf-download.store') }}" method="POST" class="form-horizontal mr-5 ml-0" style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                <div class="custom-file mr-5">
                <div class=" p-3">
                <div class="form-group">
		          	<label for="file">upload File:</label>
		           	<input id="file" type="file" name="file" class="form-control">
	           	</div>
                </div>

                
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Title <span class="required">*</span>
            </label>
            <div class="col-md-9 col-sm-9 ">
              <input type="text" id="title" name="name" required="required" class="form-control " :value="old('title')" required>
              </div>
          </div>
             
             
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Description <span class="required">*</span>
            </label>
            <div class="col-md-9 col-sm-9 ">
             <textarea name="description" class="form-control" rows="2" col="2" placeholder="write your category name" value="{{ old('name') }}" required></textarea>
            </div>
          </div>
             
                    <input type="submit" class="btn btn-success" value="Upload PDF"> 
                    {{-- <a class="btn btn-success mr-5" href="{{ route('gainer-export') }}">Export data</a> --}}
                </div>
            </div>
          
        </form>
             
                    </div>
    
              </div>
      </div>
    </div>
  </div>
  

</div>


@endsection
