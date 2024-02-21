@extends('layouts.admin_dashboard')

@section('content')

<div class="row d-flex justify-content-center">


 <div class="col-md-9 col-sm-9 mt-4 ">
    <div class="x_panel">
      @if (Session('success'))
      <div class="alert alert-sucess">
        {{session('success')}}
      </div>    
      @endif
      <div class="x_title">
        <h2>Category section</h2>
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
        
          <form method="POST" action="{{ route('osborn-service.store') }}" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" enctype="multipart/form-data" autocomplete="off">
            @csrf

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="body"><b>Category </b><span class="required">*</span>
            </label>
           <div class="col-md-6 col-sm-6 ">
                <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control" placeholder="---" id="service_category_id" name="service_category_id">
                                <option>Select Service Category----- </option>
                          @foreach ($serviceCategories as $serviceCategory)
                                <option @if(old('service_category_id') == $serviceCategory->id) selected @endif value="{{ $serviceCategory->id }}">
                                {{ $serviceCategory->name  }}
                                </option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                </div>

        
            </div>

              <div class="item form-group mt-4">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="title"><h2> Upload Image </h2><span class="required"></span>
            </label>
            <div class="col-md-6 col-sm-6 ">
                    <input type="file" name="image" class="form-control col-sm-9">
                </div>
      
        </div>
    </div>
</div>



      @if (count($errors) > 0)
      @foreach ($errors->all() as $error)
          <span class="alert alert-danger">{{ $error }}</span>
      @endforeach
          
      @endif
<div class="col-md-12 col-sm-12 mt-4">
              <div class="x_panel">
                <div class="x_title">

                  <h2>Text areas<small>Section</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>

                  <div class="clearfix"></div>
                </div>
                <div class="x_content  col-md-12 col-sm-12 ">


          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align-left" for="title"><h2> Title </h2><span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <input type="text" id="title" name="title" required="required" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required>

            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>


          </div>

                <div class="x_content">
                 
          <br>

          <div class="item form-group">
           <div id="alerts"><h2>Description</h2></div>
            {{-- <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Body <span class="required">*</span> --}}
            </label>
            <div class="col-md-10 col-sm-10 ">
             <textarea type="text" name="body" class="form-control @error('body') is-invalid @enderror" rows="10" col="10" placeholder="write your news " value="{{ old('name') }}" required></textarea>

            @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
              {{-- <input type="text" id="name" name="name" required="required" class="form-control " value="{{ old('name') }}" required> --}}
            </div>
          </div>



          <div class="ln_solid"></div>
          <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-3">
             <div class="text-center">
              <button type="submit" class="btn btn-success mx-auto">Submit</button>
            </div>
            </div>
          </div>

        </form>
      </div>

                </div>
              </div>
            </div>

@endsection