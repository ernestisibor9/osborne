<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        

.table {
  display: table;
  width: 100%;
  table-layout: fixed;
}
.row {
  display: table-row;
}
.cell {
  display: table-cell;
  outline: 1px solid #000;
  text-align: center;
  width: 33%;
  overflow: hidden;
  transition: width .4s;
}
.table:hover .center {
  width: 0%
}
    </style>
</head>
<body>
    
<div class='table'>
    <div class='row'>

        <div class="row ">

            <table class="table">
              <thead>
               <tr> 
                <th >S/N</th>
                <th >File Type</th>
                <th >File Title</th>
                <th >Description</th>
                <th >Action</th>
                 </tr>
              </thead>
              <tbody>
              {{-- @foreach ($data as $data)
              <td>{{ ++$loop->index }}</td> --}}
              <tr>
                  <div class='cell'> 
                  <td><img src="https://ocmlng.com/wp-content/uploads/2019/12/pdf.png" alt="" width="30" height="30" class="alignnone size-full wp-image-300" /></td>
                  left</div>
                  {{-- <td>{{ $data->name }}</td>
                        <td>{{ $data->description }}</td>
                   <td class=""> --}}
                    <div class='cell center'>  <button class="btn ">
                       {{-- <a href="{{ url('view', $data->id) }}"><i class="fa fa-eye" aria-hidden="true"></i>View</a> --}}
                    </button>center</div>
                    </td>
    
      <div class='cell'>
      <td class="button">
                            <button class="btn ">    
                                {{-- <a  href="{{ url('/pdfDownload', $data->file) }}" target="_blank"><i class="fa fa-download"></i>Download</a> --}}
                            </button>
                        
                        </td> 
                        right</div>
                        {{-- <td><a href="{{ url('download-pages') }}">Download</a></td> --}}
                    </tr>
    
              {{-- @endforeach --}}
    
              </tbody>
            </table>
    
    
    
            <d/iv>
            <d/iv>
        </div>
    
    </div>
  </div>
</body>
</html>
