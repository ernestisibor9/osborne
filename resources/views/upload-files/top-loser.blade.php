
{{-- <div class="container" style="margin-top: 5rem;">
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
</html> --}}





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
<div class="row d-flex justify-content-center">
 <div class="col-md-10 col-sm-10 mt-4 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Upload Files</h2>
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
  
<div class="card-body">
        <form action="{{ route('loser-file-import') }}" method="POST" class="form-horizontal mr-5 ml-0" style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                <div class="custom-file mr-5">
                <div class=" p-3">
                  
                	<div class="form-group">
		          	<label for="file">upload File:</label>
		           	<input id="file" type="file" name="file" class="form-control">
	           	</div>
                </div>
                    <button class="btn btn-primary">Import data</button>
                    <a class="btn btn-success mr-5" href="{{ route('loser-csv-export') }}">Export csv</a>
                    {{-- <a class="btn btn-success mr-5" href="{{ route('loser-excel-export') }}">Export excel</a> --}}
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