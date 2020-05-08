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
                    
                     <h3>{{$customercount}}</h3>
                    
                
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
                     <h3>{{$usercount}}</h3>
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
                   
                    <h3>{{$firecount}}</h3>
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
                <div class="chart-area align-items-center d-flex justify-content-center">
                    {{-- <h3>0</h3><br>
                    <h3>0</h3> --}}
                  </div>
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
        <div class="row">
          <div class="col-md-6">
            <div class="card  card-tasks">
              <div class="card-header ">
                <h4 class="card-title">Notification</h4>
              </div>
              @if($logistics == null || $logistics->water_volume < 3000 || $logistics->fire_extinguisher < 3 || $logistics->fire_trucks <=1 || $logistics->number_of_persons < 3)
                <div class="card-body ">
                  <div class="table-full-width table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td class="text-left">No available task. Thank you</td>
                          
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                @else
                <div class="card-body ">
                  <div class="table-full-width table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td class="text-left"><a href="fire_alert_info">Task may exist. Please check client fire location</a> </td>
                          
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                @endif
              
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
 @endsection

@section('scripts')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
 @endsection
 
 @section('footer')
  Integrity.Fairness.Service
 @endsection

 

 