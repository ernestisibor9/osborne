@extends('layouts.admin_dashboard')

@section('content')

<div class="row d-flex justify-content-center">
 <div class="col-md-10 col-sm-10 mt-4 ">
    <div class="x_panel">
      @if (count($errors) > 0)
      @foreach ($errors as $error)
      <div class="alert alert-danger">{{$error}}</div>

      @endforeach

      @endif
      <div class="x_title">
        <h2>Edit News</h2>
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
        <form method="POST" action="{{ route('market-news.update', $maketNews->id) }}" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" enctype="multipart/form-data" autocomplete="off">
            @csrf
        @method('PUT')

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <input type="text" id="title" name="title" required="required" class="form-control " value="{{ $maketNews->title }}" required>
            </div>
          </div>
               <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="body">Body <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">

              <textarea type="text" id="body" name="body" required="required"
              class="form-control" style="height:150px"
              value="{{ $maketNews->body }}"
                    >{{ $maketNews->body }}</textarea>

              {{-- <input  class="form-control " :value="$maketNews->body" required> --}}
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
