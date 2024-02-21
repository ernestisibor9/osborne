
@extends('layouts.admin_dashboard')

@section('content')
<style> 

th{
    background: #2A3F54;
    color:white;
}
</style> 
<div class="row d-flex justify-content-center mt-4">
  <div class="col-md-9 col-sm-9 ">

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

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
  <div class="table-responsive">

        <table class="table ">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
           @if(!empty($adminUsers) && $adminUsers->count())
          @foreach ($adminUsers as $adminUser)
            <tr>
              <td scope="row">{{ ++$loop->index }}</th>
              <td>{{ $adminUser->name }}</td>
              <td>{{ $adminUser->email }}</td>
              
               <td>
                <form method="POST" action="{{ route('admin-dashboard.destroy', $adminUser->id)  }}"   enctype="multipart/form-data" >
                    
                          <a class="btn btn-success btn-sm rounded-0"  href="{{ route('admin-dashboard.edit', $adminUser->id) }}" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit">Edit</i></a>
                       


                        @csrf
                        @method('DELETE')
 
                        <li class="list-inline-item">
                          <button type="submit" class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash">Delete</i></button>
                        </li>

                 </form>


            </tr>
          @endforeach
            @else
                <tr>
                    <td colspan="10">There are no data.</td>
                </tr>
            @endif

          </tbody>
        </table>
   {{ $adminUser->paginate(3)->links() }}

      </div>
      </div>
    </div>
  </div>

      {{-- {{  $adminUser->links() }} --}}
       {{-- {!! $adminUser->links() !!} --}}

</div>


@endsection