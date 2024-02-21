@extends('layouts.admin_dashboard')

@section('content')




<div class="container " style="margin-top: 1rem;">

<div class="row d-flex justify-content-center">

 <div class="col-md-10 col-sm-10 mt-4 ">

@if(session('success'))

    <div class="alert alert-success col-sm-6">
        {{ session('success') }}
    </div>


    @endif
    <div class="x_panel">
      <div class="x_title">
        <h2>Companies Report</h2>
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



      @if (count($errors) > 0)
      @foreach ($errors->all() as $error)
          <span class="alert alert-danger">{{ $error }}</span>
      @endforeach

      @endif
      </div>
      <div class="x_content">
        <br>

        <form action="{{ route('register_report.store') }}" method="POST" class="form-horizontal mr-5 ml-0" style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" enctype="multipart/form-data">

          @csrf

           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Companies <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <select class="form-control @error('company_id') is-valide

              @enderror" placeholder="---" id="company_id" name="company_id">
              @foreach ($companies as $company)
                    <option @if(old('company_id') == $company->id) selected @endif value="{{ $company->id }}">
                    {{ $company->name  }}
                    </option>
                @endforeach
              </select>


            @error('company_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            </div>

          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Title <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="title" type="text" name="title" class="form-control">
            </div>

            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>

           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Document<span class="required">*<br><small class="text-danger">max:30mb;pdf</small></small> </span>
            </label>
            <div class="col-md-6 col-sm-6 ">
		           	<input id="document" type="file" name="document" class="form-control">
            </div>


            @error('document')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="value">Period <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
                <div class="form-group">
                          <select id='' class="form-control" placeholder="---" id="" name="period">
                                <option>Select----- </option>
                                <option value="0">Full Year</option>
                                <option value="1">1st Quarter</option>
                                <option value="2">2nd Quarter</option>
                                <option value="3">3rd Quarter</option>
                                <option value="4">4th Quarter</option>
                          </select>


                </div>


            @error('period')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>

          </div>
           <br>
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="cap">Year <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <select id="date-dropdown" class="form-control" placeholder="---" id="" name="year">
                              <!--<option></option>-->
                              <!--@for($i=date('Y');  $i >= 1970; $i--)-->
                              <!--<option>{{ $i }}</option>-->
                              <!--@endfor-->
                </select>

            @error('year')    
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>

                                            <script>
                    let dateDropdown = document.getElementById('date-dropdown');

                    let currentYear = new Date().getFullYear();
                    let earliestYear = 1980;
                    while (currentYear >= earliestYear) {
                      let dateOption = document.createElement('option');
                      dateOption.text = currentYear;
                      dateOption.value = currentYear;
                      dateDropdown.add(dateOption);
                      currentYear -= 1;
                    }
                  </script>
          </div>


          <div class="ln_solid"></div>
          <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-3">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </div>


        </form>
      </div>
    </div>
  </div>


</div>


</div>






 <div class="row d-flex justify-content-center mt-4">

  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel mt-4 ">

      <div class="x_title">
        <h2>View Record</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Settings 1</a>
                <a class="dropdown-item" href="#">Settings 2</a>
              </div>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>

      </div>

      <div class="x_content ">
  <div class="table-responsive">

        <table class="table ">
          <thead>
             <tr>
              <th>#</th>
              <th>Companies</th>
              <th>Title</th>
              <th>Document</th>
              <th>Period</th>
              <th>Year</th>

              <th>Action</th>
            </tr>

          </thead>
          <tbody>
        @php
            $periodCollection = [0=>'Full Year', 1=>'1st Qrt', 2=>'2nd Qrt', 3=>'3rd Qrt', 4=>'4th Qrt'];
        @endphp
            @foreach ($CompanyReports as $companyReport)
            <tr>


            <td scope="row">{{ ++$loop->index }}</td>
            <td scope="row">{{ $companyReport->company->name }}</td>
            <td scope="row">{{ $companyReport->title }}</td>
            <td scope="row">
            <a href='{{Storage::url("public/uploads/{$companyReport->document}")}}' class=" me-2 mx-5 btn-floating" target="_blank"><i class="fa fa-eye" aria-hidden="true" target="_blank"></i>View</a>
            </td>
            <td scope="row">{{ $periodCollection[$companyReport->period] }}</td>
            <td scope="row">{{ $companyReport->year }}</td>

              <td>
                  <a class="btn btn-success btn-sm rounded-0" href="{{ route('company_report.edit', $companyReport->id) }} " type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit">Edit</i></a>


                <form method="POST" action="{{ route('company_report.destroy', $companyReport->id) }}"   enctype="multipart/form-data" >


                     <!--  <li class="list-inline-item">-->
                     <!--<a class="btn btn-success btn-sm rounded-0" href="{{ route('company_report.show', $companyReport->id) }} " type="button" data-toggle="tooltip" data-placement="top" title="view"><i class="fa fa-eye">view</i></a>-->
                     <!-- </li>-->


                   @csrf
                        @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete" ><i class="fa fa-trash">Delete</i></button>
                      </form>




                    </td>


                  </tr>

                  @endforeach

          </tbody>
        </table>


  </div>
  </div>
  </div>


</div>


@endsection
