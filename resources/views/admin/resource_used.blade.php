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
                          Fire ID
                        </th>
                        <th class="text-center">
                          Water Volume
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
                       
                      </thead>
                      <tbody>
                       {{--  @foreach($vit_payment as $vit_payment)
                          @if($vit_payment->paid_status === "Paid")
                            <tr>
                              <td class="text-center">
                               {{$vit_payment->name}}
                              </td>
                              <td class="text-center">
                                {{$vit_payment->mobile_number}}
                              </td>
                              <td class="text-center">
                                {{$vit_payment->vehicle_no}}
                              </td>
                              <td class="text-center">
                                {{$vit_payment->reference}}
                              </td>
                              <td class="text-center">
                                {{$vit_payment->paid_status}}
                              </td>
                              <td class="text-center">
                                {{$vit_payment->created_at}}
                              </td>

                        
                            </tr>
                          @endif
                        @endforeach --}}
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