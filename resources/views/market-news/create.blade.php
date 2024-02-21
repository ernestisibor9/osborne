@extends('layouts.admin_dashboard')

@section('content')
<style>
body {
     background-color: lightblue;
        background-image: url("img/about-bg.jpg");
}

.x_panel{
border-radius: 5px;

}
</style>
<div class="row d-flex justify-content-center">
 <div class="col-md-10 col-sm-10 mt-4 ">
    <div class="x_panel">
      
      @if (count($errors) > 0)
      @foreach ($errors->all() as $error)
          <span class="alert alert-danger">{{ $error }}</span>
      @endforeach
          
      @endif
      <div class="x_title">
        <h2>Select News Category</h2>
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

          <form method="POST" action="{{ route('market-news.store') }}" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" enctype="multipart/form-data" autocomplete="off">
            @csrf

<div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="body"><b>Category </b><span class="required">*</span>
            </label>
           <div class="col-md-6 col-sm-6 ">
                <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control @error('category_id') is-valide
                              
                          @enderror" placeholder="---" id="category_id" name="category_id">
                          @foreach ($categories as $category)
                                <option @if(old('category_id') == $category->id) selected @endif value="{{ $category->id }}">
                                {{ $category->name  }}
                                </option>
                            @endforeach
                          </select>

                          @error('category_id')
                              <div class="alert alert-danger"></div>
                          @enderror
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="col-md-10 col-sm-10 col-xs-12">
              <div class="x_panel">
                <div class="x_title">

                  <h2>Text areas<small>Sessions</small></h2>
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
              <input type="text" id="title" name="title" required="required" class="form-control @error('title') is-invalide @enderror " value="{{old('title')}}" required>
            
              @error('body')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>


          </div>

                  <div id="alerts"><h2>BODY</h2></div>
                   <div class="x_content">
        <br>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Body <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
             {{-- <textarea name="body" class="form-control" rows="3" col="3" placeholder="write your news " value="{{ old('name') }}" required></textarea> --}}
             <textarea type="text" name="body" class="form-control @error('body') is-invalid @enderror" rows="10" col="10" placeholder="create your news news" value="{{ old('name') }}" required></textarea>

             @error('body')
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