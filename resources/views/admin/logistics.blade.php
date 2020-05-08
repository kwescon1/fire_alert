 @extends('layouts.master')

 @section('title')
  Fire Service Logistics
 @endsection

 @section('heading')
 <a class="navbar-brand" href="#pablo">LOGISTICS</a>
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

 <div class="panel-header panel-header-sm">
 </div>
  <div class="content">
    <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title"></h4>
                </div>
                
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        
                        <th class="text-center">
                          Water Volume(Ltr)
                        </th>
                        <th class="text-center">
                          Fire Extinguishers
                        </th>
                        <th class="text-center">
                          Fire Tracks
                        </th>
                        <th class="text-center">
                          Number Of Fire Persons
                        </th>

                        <th class="text-center">
                          Date
                        </th>

                       
                      </thead>
                      <tbody>
                        @if($logistic->count() > 0)
                          @foreach($logistic as $logistics)
                              <tr>
                                <td class="text-center">
                                  {{$logistics->water_volume}}
                                </td>
                                <td class="text-center">
                                  {{$logistics->fire_extinguisher}}
                                </td>
                                <td class="text-center">
                                  {{$logistics->fire_trucks}}
                                </td>
                                <td class="text-center">
                                  {{$logistics->number_of_persons}}
                                </td>
                                <td class="text-center">
                                  {{$logistics->created_at}}
                                </td>
                              </tr>
                            @endforeach
                          @else
                          <h2>No Available Logistics</h2>
                          @endif
                      </tbody>
                    </table>
                  </div>
                </div>

                

              </div>
            </div>
            
          </div>
  </div>
 @endsection

 @section('scripts')

 @endsection

 @section('footer')
 Integrity.Fairness.Service
 @endsection