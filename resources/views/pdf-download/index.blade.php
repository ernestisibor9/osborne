
@extends('layouts.admin_dashboard')

@section('content')
<style>
body {
     background-color: lightblue;
        background-image: url("img/about-bg.jpg");
}

.x_panel{
border-radius:5px;

}

th{
    background: #2A3F54;
    color:white;
}
</style>
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
              <th>Title</th>
              <th>Description</th>
              <th>File Path</th>
              <th>creation Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($pdfdata as $pdfdata)
            <tr>
              <td scope="row">{{ ++$loop->index }}</th>
              <td>{{ $pdfdata->name }}</td>
              <td>{{ strip_tags($pdfdata->description) }}</td> 
              <td>
        <a href='{{Storage::url($pdfdata->file)}}' class=" me-2 mx-5 btn-floating" target="_blank"><i class="fa fa-eye" aria-hidden="true" target="_blank"></i>View</a>

              
              </td>
             
                
                <td>{{ date('Y-m-d', strtotime($pdfdata->created_at)) }}</td>
              
               <td>
                 
                     <form method="POST" action="{{ route('pdf-download.destroy', $pdfdata->id)  }}"   enctype="multipart/form-data" >
                    
                          <!--<a class="btn btn-success btn-sm rounded-0" href="{{ route('pdf-download.edit', $pdfdata->id) }}" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit">Edit</i></a>-->
                       
                        @csrf
                        @method('DELETE')
 
                        <li class="list-inline-item">
                          <button type="submit" class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash">Delete</i></button>
                        </li>

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
  

</div>


@endsection












