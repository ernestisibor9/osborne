
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

        <!--Table-->
        <table class="table ">
          <thead>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Body</th>
              <th>Category</th>
              <th>created_at</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($dispnews as $dispnew)
            <tr>
              <td scope="row">{{ ++$loop->index }}</th>
              <td>{{ $dispnew->title }}</td>
              <td>@php echo html_entity_decode($dispnew->body );  @endphp</td>
              <td>{{ $dispnew->category->name }}</td>
                <td>{{ date('Y-m-d', strtotime($dispnew->created_at)) }}</td>
              
               <td>
                {{-- <form action="{{ route('category.destroy',$dispnew->id) }}" method="POST">


                        <a class="btn btn-primary btn-xs mr-3" href="{{ route('admin-dashboard.edit',$dispnew->id) }}"><span class="glyphicon glyphicon-pencil"></span>Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit"  class="btn btn-danger btn-xs ml-3"><span class="glyphicon glyphicon-trash">Delete</button>
                    </form> --}}
                   



                   
                     <form method="POST" action="{{ route('market-news.destroy', $dispnew->id)  }}"   enctype="multipart/form-data" >


                                            
                          <a class="btn btn-success btn-sm rounded-0" href="{{ route('market-news.edit', $dispnew->id) }}" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit">Edit</i></a>
                       

                        {{-- <a class="btn btn-primary btn-xs mr-3" href="{{ route('market-news.edit', $dispnew->id) }}"><span class="glyphicon glyphicon-pencil"></span>Edit</a> --}}

                        @csrf
                        @method('DELETE')
 
                        <li class="list-inline-item">
                          <button type="submit" class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash">Delete</i></button>
                        </li>

                        {{-- <button type="submit"  class="btn btn-danger btn-xs ml-3"><span class="glyphicon glyphicon-trash">Delete</button> --}}
                    </form>

               </td>

               
            </tr>
          @endforeach
          

          </tbody>
        </table>
        {{ $dispnews->links() }}
      </div>
      </div>
    </div>
  </div>
  

</div>


@endsection