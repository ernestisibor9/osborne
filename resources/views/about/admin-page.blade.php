
@extends('layouts.admin_dashboard')

@section('content')
{{-- <style>
body {
     background-color: lightblue;
        background-image: url("img/about-bg.jpg");
}

.x_panel{
border-radius:50px 25px 50px 25px;

}

th{
    background: #2A3F54;
    color:white;
}
</style> --}}
<div class="row d-flex justify-content-center mt-4">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel mt-4 ">
      <div class="x_title">
        <h2>View Users</h2>
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

        <table class="table ">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>description</th>
              {{-- <th>Bio</th> --}}
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($abouts as $about)
            <tr>
              <td scope="row">{{ ++$loop->index }}</th>
              <td>{{ $about->name }}</td>
              <td>@php echo html_entity_decode($about->description);  @endphp</td>
              {{-- <td>{{ $about->bio }}</td> --}}
              {{-- <td>{{ $team->image }}</td> --}}
              
               <td>
                          <a class="btn btn-success btn-sm rounded-0"  href="{{ route('about.edit',$about->id) }}"" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit">Edit</i></a>
                <!--<form action="{{ route('about.destroy',$about->id) }}" method="POST">-->
                        
                       

                        <!--@csrf-->
                        <!--@method('DELETE')-->

                        <!--<button type="submit"  class="btn btn-danger btn-xs ml-3"><span class="glyphicon glyphicon-trash">Delete</button> --}}-->
                    <!--</form>-->
                   
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