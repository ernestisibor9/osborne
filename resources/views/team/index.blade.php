
@extends('layouts.admin_dashboard')

@section('content')
    <style>
    th{
 background: #2A3F54;
    color:white;
    }
    </style>
<div class="row d-flex justify-content-center mt-4">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel mt-4 ">
      <div class="x_title">
        <h2>View Team Members</h2>
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
              <th>Name</th>
              <th>Office</th>
              <th>Bio</th>

              <th>Director</th>
              <th>Management</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($teams as $team)
            <tr>
              <td scope="row">{{ ++$loop->index }}</th>
              <td>{{ $team->name }}</td>
              <td>{{ $team->designation }}</td>
              <td><?php echo html_entity_decode($team->bio) ?></td>
       
          <td>{{ $team->is_director ==1 ? 'yes' : 'no'  }}</td>
          <td>{{ $team->is_management ==1 ? 'yes' : 'no'  }}</td>
              
              
               <td>

                      <form method="POST" action="{{ route('team.destroy', $team->id)  }}"   enctype="multipart/form-data" >

                      
                          <a class="btn btn-success btn-sm rounded-0"  href="{{ route('team.edit', $team->id) }}" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit">Edit</i></a>
                       


                        @csrf
                        @method('DELETE')
 
                        <li class="list-inline-item">
                          <button type="submit" class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash">Delete</i></button>
                        </li>

                        {{-- <a class="btn btn-primary btn-xs mr-3" href="{{ route('team.edit',$team->id) }}"><span class="glyphicon glyphicon-pencil"></span>Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit"  class="btn btn-danger btn-xs ml-3"><span class="glyphicon glyphicon-trash">Delete</button> --}}
                    </form>


                   
               </td>

               
            </tr>
          @endforeach
          

          </tbody>
        </table>
        {{ $teams->links() }}

      </div>
      </div>
    </div>
  </div>
  

</div>


@endsection