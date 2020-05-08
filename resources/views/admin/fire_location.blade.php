 @extends('layouts.master')

 @section('title')
  Fire Location
 @endsection

 @section('heading')
 <a class="navbar-brand" href="#pablo">Client Fire Information</a>
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
                          Client Name
                        </th>
                        <th class="text-center">
                          Location
                        </th>
                        <th class="text-center">
                          Fire Intensity
                        </th>
                        
                        <th class="text-center">
                          Status
                        </th>

                        <th class="text-center">
                          Nearest Station
                        </th>
                        <th class="text-center">
                          Route
                        </th>
                       
                      </thead>
                      <tbody>
                        @if($final)
                          @foreach($final as $data)
                              @if($data['status'] == 'Fire')
                                <tr>
                                  <td class="text-center">
                                   {{$data['customer_name']}}
                                  </td>
                                  <td class="text-center">
                                   {{$data['location']}}
                                  </td>
                                  <td class="text-center">
                                   {{$data['intensity']}}
                                  </td>
                                
                                  <td class="text-center">
                                    {{$data['status']}}
                                  </td>
                                  <td class="text-center">
                                    {{$data['station']['name']}}
                                  </td>
                                  </a>
                                  <td class="text-center"><a href="{{ URL('map/'.$data['lng'].'/'.$data['lat'].'/'.$data['location']) }}">Route</a></td>
                                  {{-- <td class="text-center">
                                    {{$data['lat']}}
                                  </td>
                                  <td class="text-center">
                                    {{$data['lng']}}
                                  </td> --}}
                                </tr>
                              @endif
                          @endforeach
                        @else
                          <marquee><h3> No fire incident availble</h3></marquee>
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

 @section('footer')
 Integrity.Fairness.Service
 @endsection