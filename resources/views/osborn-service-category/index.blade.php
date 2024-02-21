
@extends('layouts.admin_dashboard')

@section('content')

<div class="row d-flex justify-content-center mt-4">
  <div class="col-md-9 col-sm-9 ">
    <div class="x_panel mt-4 ">
      <div class="x_title">
        <h2>EDIT Category</h2>
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
              <th>Category Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($serviceCategories as $serviceCategory)
            <tr>
              <td scope="row">{{ ++$loop->index }}</th>
              <td>{{ $serviceCategory->name }}</td>
            
               <td>
    
                     <form method="POST" action="{{ route('osborn-service-category.destroy',$serviceCategory->id)  }}"   enctype="multipart/form-data" >
                    
                          <a class="btn btn-success btn-sm rounded-0" href="{{ route('osborn-service-category.edit',$serviceCategory->id) }}" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit">Edit</i></a>
                       
                        @csrf
                        @method('DELETE')
 
                        <li class="list-inline-item">
                          <button type="submit" class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash">Delete</i></button>
                        </li>

                     {{-- <form method="POST" action="{{ route('osborn-service-category.destroy',$serviceCategory->id)  }}"   enctype="multipart/form-data" >


                        <a class="btn btn-primary btn-xs mr-3" href="{{ route('osborn-service-category.edit',$serviceCategory->id) }}"><span class="glyphicon glyphicon-pencil"></span>Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit"  class="btn btn-danger btn-xs ml-3"><span class="glyphicon glyphicon-trash">Delete</button> --}}
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