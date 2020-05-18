 @extends('layouts.master')

 @section('title')
  Dashboard - SuperAdmin
 @endsection

 @section('heading')
  General Usage
 @endsection

 @section('form')
  <form>
              @csrf
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
 @endsection

 @section('content')
  <div class="panel-header panel-header-lg">
        <canvas id="bigDashboardChart"></canvas>
      </div>
      <div class="content">
        <div class="row">
         <div class="col-lg-4">
              <div class="card card-chart">
                <div class="card-header">
                  <h5 class="card-category">Info</h5>
                  <h4 class="card-title">Total Number of users</h4>
                  <div class="dropdown">
                    <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                      <i class="now-ui-icons loader_gear"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item text-danger" href="#">Reset Data</a>
                    </div>
                  </div>
                </div>
             
    
                <div class="card-body">
                  <div class="chart-area align-items-center d-flex justify-content-center">
                    
                    @if(count($customercount) > 0)
                     <h3>{{count($customercount)}}</h3>
                     @else
                     <h3>No customer available</h3>
                     @endif
                    
                
                  </div>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                  </div>
                </div>
              </div>
            </div>
          

             <div class="col-lg-4">
              <div class="card card-chart">
                <div class="card-header">
                  <h5 class="card-category">Info</h5>
                  <h4 class="card-title">Number of Fire Stations</h4>
                  <div class="dropdown">
                    <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                      <i class="now-ui-icons loader_gear"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item text-danger" href="#">Reset Data</a>
                    </div>
                  </div>
                </div>
             
    
                <div class="card-body">
                  <div class="chart-area align-items-center d-flex justify-content-center">

                    @if(count($usercount) > 0)
                     <h3>{{count($usercount)}}</h3>
                    @else
                    <h3>No user data</h3>
                    @endif

                  </div>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                  </div>
                </div>
              </div>
            </div>
             <div class="col-lg-4">
              <div class="card card-chart">
                <div class="card-header">
                  <h5 class="card-category" style="font-weight: bold; color: red;">

                    @if($finalcount && $logistics && $logistics->water_volume >= 3000 && $logistics->fire_extinguisher >= 3 && $logistics->fire_trucks >1 && $logistics->number_of_persons > 3)
                    <a href="{{url('fire_alert_info')}}">
                    Notifications : {{count($finalcount)}}
            
                    @endif

                    </a> </h5>
                  <h4 class="card-title">Total Reported Incidents</h4>
                  <div class="dropdown">
                    <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                      <i class="now-ui-icons loader_gear"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item text-danger" href="#">Reset Data</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart-area align-items-center d-flex justify-content-center">

                    @if(count($fire) > 0)
                    <h3>{{count($fire)}}</h3>
                    @else
                    <h3>No fire</h3>
                    @endif

                  </div>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                  </div>
                </div>
              </div>
            </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Info</h5>
                <h4 class="card-title">Solved Incidents</h4>
                <div class="dropdown">
                  <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons loader_gear"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item text-danger" href="#">Remove Data</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area align-items-center d-flex justify-content-center">
                    {{-- <canvas id="lineChartExample"></canvas> --}}

                    @if(count($solution) > 0)
                    <h3>{{count($solution)}}</h3>
                    @else
                    <h3>No incident solved</h3>
                    @endif

                  </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Info</h5>
                <h4 class="card-title">Average fire Incidents</h4>
                <div class="dropdown">
                  <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons loader_gear"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item text-danger" href="#">Remove Data</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area align-items-center d-flex justify-content-center">
                    {{-- <canvas id="lineChartExample"></canvas> --}}
                    <h3>0</h3>
                  </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Info</h5>
                <h4 class="card-title">Logistics</h4>
                <div class="dropdown">
                  <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons loader_gear"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item text-danger" href="#">Remove Data</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                @if($logistics && $logistics->water_volume >= 3000 && $logistics->fire_extinguisher >= 3 && $logistics->fire_trucks >1 && $logistics->number_of_persons > 3)
                <div class="table-responsive">
                  <table class="table">
                    <tbody class="text-center">
                      <tr>
                        <td>
                          Water Volume
                        </td>
                        <td>
                          {{$logistics->water_volume}}
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Extinguisher
                        </td>
                        <td>{{-- {{ $logistic ?? '' }} --}}
                          {{$logistics->fire_extinguisher}}
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Fire Trucks
                        </td>
                        <td>
                          {{$logistics->fire_trucks}}
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Persons
                        </td>
                        <td>
                          {{$logistics->number_of_persons}}
                        </td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
                @else
                  <div class="chart-area align-items-center d-flex justify-content-center">
                    <h3>Insufficient Logistics</h3>
                  </div>
                @endif
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>

          </div>
          
        </div>
      </div>
 @endsection

 @section('footer')
  Integrity.Fairness.Service
 @endsection

@section('scripts')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
 @endsection
 

 

 