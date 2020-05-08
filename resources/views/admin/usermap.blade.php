 @extends('layouts.master')

 @section('title')
  Map Location
 @endsection

 @section('heading')
  Fire Location
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
            <div class="card " style="height: 700px;">

              <div class="card-header ">
                Google Maps
              </div>
              <div class="card-body">
                <div id="map" class="map" style="height: 630px;"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

  @endsection

 @section('footer')
    Integrity.Fairness.Service
 @endsection
      
  @section('map_script')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      usermap.initGoogleMaps();
    });
  </script>
  @endsection
