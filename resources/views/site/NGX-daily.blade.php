@extends('layouts.site')
@push('css')
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<style>
    .table-m4{
        margin-top: 15px;
    }

    .title-sub{
        font-size: 22px !important;
        margin-bottom: 10px;
        padding-bottom: 5px;
        font-weight: bold;
    }

    .p-custom-y{
        padding: 0.7em 0.7em 0.7em 0.7em;
    }
</style>
@endpush
@section('content')
    <section class="page section-padding">
        <div class="container text-center">
            <h2 class="title">Company Financial Report</h2>
            <span class="sub-title">Home &gt; Pages &gt; Company Financial Report</span>
        </div>
    </section>

   <section class="about-office-section hiring-section  section-padding">
       <div class="container">
           <div class="right-content mb-3">
@if($priceData)
               <h5 class="title-sub">NGX DAILY PRICELIST @ {{$priceData[0]['tradeDate']}}</h5>
               @endif
                <p>Archive of NGX Daily Pricelist</p>
               <form class="contact-form" method="POST" action="{{route('price')}}">
                   @csrf
                  <fieldset>
                        <div class="row">
                           <div class="col-md-2">
                               <h4 class="title-sub text-left">Date</h4>
                           </div>
                           <div class="col-md-4">
                               <div class="form-group">
                                   <input type="date" class="form-control" name="date">
                                </div>
                           </div>
                           <div class="col-md-5">
                               <button class="btn btn-primary pt-2 pb-2 mt-2 p-custom-y">Retrieve</button>
                           </div>
                       </div>
                  </fieldset>
                </form>
           </div>



<div class="mt-5 table-m4">
                <div class="table-m4 table-responsive ">
                    @if(count($priceData) > 0)
                  <table class="table m-5 ">
                    <!--<caption><strong>Report</strong></caption>-->
                    <thead>
						<tr class="header">
							<th class="bg-primary">Stock</th>
							<th class="bg-primary">Previous<br>Close</th>
							<th class="bg-primary">Open Price</th>
							<th class="bg-primary">High Price</th>
							<th class="bg-primary">Low Price</th>
							<th class="bg-primary">Close Price</th>
							<th class="bg-primary">Absolute<br>Change</th>
							<th class="bg-primary">%<br> Change</th>
							{{-- <th class="bg-primary">Deals</th> --}}
							<th class="bg-primary">Daily Volume</th>
							<th class="bg-primary"> Daily Value</th>
						</tr>
					</thead>
                      <tbody>
                      @foreach ($priceData as $company=>$data )
                        <tr>
                          <td>{{$data['stock']}}</td>
                          <td>{{$data['pClose']}}</td>
                          <td>{{$data['openPrice']}}</td>
                          <td>{{$data['highPrice']}}</td>
                          <td>{{$data['lowPrice']}}</td>
                          <td>{{$data['closePrice']}}</td>
                          <td>{{$data['absoluteChange']}}</td>
                          <td>{{$data['percentChange']}}</td>
                          <td>{{$data['dailyVolume']}}</td>
                          <td>{{$data['dailyValue']}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                  </table>
                  @else
                  <p> No Information found for the date</p>
                  @endif
                </div>
           </div>


       </div>
   </section>
@endsection



