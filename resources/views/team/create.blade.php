@extends('layouts.admin_dashboard')

@section('content')

<div class="row d-flex justify-content-center">
 <div class="col-md-10 col-sm-10 mt-4 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Add Team</h2>
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


        <form method="POST" action="{{ route('team.store') }}" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" enctype="multipart/form-data" autocomplete="off">
            @csrf


          <div class="item form-group mb-3">
            <div class="col-md-6 col-sm-6 align-left">      
              <label class="col-form-label col-md-6 col-sm-6 label-align" for="title"><b>SELECT</b> <span class="required">:</span>
              </label>
              <span class="align-left mr-3 ">  
               <b>is Managemnt:</b> 
               <input type="radio" name="position" value="is_management" {{ old('position') == 'is_management' ? 'checked' : '' }} class="regular-checkbox">

                {{-- <input type="radio"   value="{{ old('position') ?? 'is_management' }}" name="position" class="" > --}}
              </span>
              <span>
                <label class=" align-left"><b>is Director:</b></label>

                <input type="radio" name="position" value="is_director" {{ old('position') == 'is_director' ? 'checked' : '' }} class="regular-checkbox">

                {{-- <input type="radio"  value="{{ old('position') ?? 'is_director' }}"   name="position"  class=""> --}}
            </span>
            </div>
          </div>

          
          


          
          <div class="item form-group mb-4">
           
             <label class="col-form-label col-md-3 col-sm-3 label-align" for="title"> Name <span class="required">*</span>
            </label>

            <div class="col-md-6 col-sm-6 ">
              <input type="text" id="title" name="name" required="required" class="form-control " value="{{old('name')}}" required>
              </div>
          </div>



          <div class="item form-group mb-4">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="title"> Designation <span class="required">*</span>
            </label>
            {{-- <div class="col-md-6 col-sm-6 "> --}}

            <div class="col-md-6 col-sm-6 ">
              <input type="text" id="title" name="designation" required="required" class="form-control " value="{{old('designation') }}" required>
              {{-- <input type="text" id="title" name="name" required="required" class="form-control " :value="old('name')" required> --}}
              </div>
          </div>



          <div class="item form-group mb-4">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="title"> Bio <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <textarea name="bio" class="form-control" rows="3" col="3" placeholder="write your company description" value="{{ old('bio') }}" required>{{ old('bio') }}</textarea>
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
<br>

@endsection