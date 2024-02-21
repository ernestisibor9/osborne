
@extends('layouts.admin_dashboard')
@section('content')
<!--<div class="row tile_count">-->
<!--<div class=""><a href="{{ route('register') }}">Create New Record</a></div>-->
         
<!--          </div>-->




<div class="row">
            <div class="col-md-8 col-sm-8 col-xs-8 card-body text-center">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <div class="p-6 bg-white border-b border-gray-200">
                      You're logged in!
                      <small>
                      {{ \Carbon\Carbon::parse( now()->format('D, d M Y h:i A') )->diffForHumans(); }}
                      </small>
                  </div>
                  </div>
                  <div class="col-md-6">
                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                      <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                      <span class="card bg-success text-white fa fa-clock">{{\Carbon\Carbon::now()->format('D, d M Y h:i A')}}</span> <b class="caret"></b>
                    </div>
                  </div>
                </div>

                <!--<div class="col-md-6 col-sm-6 col-xs-6">-->
                <!--  <div id="placeholder33" style="height: 260px; display: none" class="demo-placeholder"></div>-->
                <!--  <div style="width: 100%;">-->
                <!--    <div class="card">-->
                      
                <!--        <div class="col-sm-6 mb-3 p-3 card card-body">-->
                <!--          <span class="image"><img src="{{ asset('vendors/images/img.jpg') }}" alt="Profile Image" /></span>-->
                <!--        <span>-->
                <!--          <div class="card card-header-tabs">-->

                <!--            <span>{{ Auth::user()->name }}</span>-->
                <!--            {{ Auth::user()->email }}-->
                <!--          </span>-->
                <!--          <span class="message">-->
                <!--            <span class="time">{{ \Carbon\Carbon::now() }}</span>-->
                <!--          </span>-->
                <!--        </div>-->
                <!--        </div>-->
                      
                <!--    </div>-->
                    {{-- <div id="canvas_dahs" class="demo-placeholder" style="width: 100%; height: 270px; padding: 0px; position: relative;"><canvas class="flot-base" width="671" height="270" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 671px; height: 270px;"></canvas><div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 106px; top: 254px; left: 64px; text-align: center;">Jan 02</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 106px; top: 254px; left: 169px; text-align: center;">Jan 03</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 106px; top: 254px; left: 274px; text-align: center;">Jan 04</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 106px; top: 254px; left: 379px; text-align: center;">Jan 05</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 106px; top: 254px; left: 484px; text-align: center;">Jan 06</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 106px; top: 254px; left: 589px; text-align: center;">Jan 07</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 242px; left: 13px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 223px; left: 7px; text-align: right;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 204px; left: 7px; text-align: right;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 186px; left: 7px; text-align: right;">30</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 167px; left: 7px; text-align: right;">40</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 149px; left: 7px; text-align: right;">50</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 130px; left: 7px; text-align: right;">60</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 112px; left: 7px; text-align: right;">70</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 93px; left: 7px; text-align: right;">80</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 75px; left: 7px; text-align: right;">90</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 56px; left: 1px; text-align: right;">100</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 38px; left: 2px; text-align: right;">110</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 19px; left: 1px; text-align: right;">120</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 1px; text-align: right;">130</div></div></div><canvas class="flot-overlay" width="671" height="270" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 671px; height: 270px;"></canvas></div> --}}
                  </div>
                </div>
                <!--<div class="col-md-3 col-sm-3 col-xs-12 bg-white">-->
                <!--  <div class="x_title">-->
                <!--    <h2>Social Media Handle</h2>-->
                <!--    <div class="clearfix"></div>-->
                <!--  </div>-->

                <!--  <div class="col-md-12 col-sm-12 col-xs-6">-->
                <!--    <div>-->
                <!--      <div class="">-->
                <!--        {{-- <div class="progress progress_sm" style="width: 76%;">-->
                <!--        </div> --}}-->
                <!--        <p>Facebook Campaign</p>-->
                <!--      </div>-->
                <!--    </div>-->
                <!--    <div>-->
                <!--      <div class="">-->
                <!--        <p>Twitter Campaign</p>-->
                <!--        {{-- <div class="progress progress_sm" style="width: 76%;">-->
                <!--          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60" aria-valuenow="59" style="width: 60%;"></div>-->
                <!--        </div> --}}-->
                <!--      </div>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--  {{-- <div class="col-md-12 col-sm-12 col-xs-6">-->
                <!--    <div>-->
                <!--      <p>Conventional Media</p>-->
                <!--      <div class="">-->
                <!--        <div class="progress progress_sm" style="width: 76%;">-->
                <!--          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40" aria-valuenow="39" style="width: 40%;"></div>-->
                <!--        </div>-->
                <!--      </div>-->
                <!--    </div>-->
                <!--    <div>-->
                <!--      <p>Bill boards</p>-->
                <!--      <div class="">-->
                <!--        <div class="progress progress_sm" style="width: 76%;">-->
                <!--          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50" aria-valuenow="49" style="width: 50%;"></div>-->
                <!--        </div>-->
                <!--      </div> --}}-->
                <!--    </div>-->
                <!--  </div>-->

                </div>

                <div class="clearfix"></div>
                
              </div>
            </div>

          </div> 


@endsection
