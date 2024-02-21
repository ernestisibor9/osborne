
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
              <th>Body</th>
              <th>Category</th>
              <th>Service Image</th>
              <th>creation Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($osbornServices as $osbornService)
            <tr>
              <td scope="row">{{ ++$loop->index }}</th>
              <td>{{ $osbornService->title }}</td>
              <td><?php echo html_entity_decode($osbornService->body) ?></td>
              {{-- <td>{{ $osbornService->osbornCategory->name }}</td> --}}
              <td>{{ !empty($osbornService->osbornCategory) ? $osbornService->osbornCategory->name:'' }}</td>
                
                <td><img src="{{ Storage::url($osbornService->image) }}" height="75" width="75" alt="" /></td>
                <td>{{ date('Y-m-d', strtotime($osbornService->created_at)) }}</td>
              
               <td>
                   
                     <form method="POST" action="{{ route('osborn-service.destroy', $osbornService->id)  }}"   enctype="multipart/form-data" >
                    
                          <a class="btn btn-success btn-sm rounded-0" href="{{ route('osborn-service.edit', $osbornService->id) }}" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit">Edit</i></a>
                       
                        @csrf
                        @method('DELETE')
 
                        <li class="list-inline-item">
                          <button type="submit" class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash">Delete</i></button>
                        </li>
{{-- 

                        <a class="btn btn-primary btn-xs ml-1" href="{{ route('osborn-service.edit', $osbornService->id) }}"><span class="glyphicon glyphicon-pencil"></span>Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit"  class="btn btn-danger btn-xs mr-3 text-right"><span class="glyphicon glyphicon-trash">Delete</button> --}}
                    </form>

               </td>

               
            </tr>
          @endforeach
          

          </tbody>
        </table>
        {{ $osbornServices->links() }}
      </div>
      </div>
    </div>
  </div>
  

</div>


@endsection