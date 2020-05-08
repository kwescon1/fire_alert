@extends('layouts.form')

@section('content')
<div class="container" style="position:relative; top:200px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div style="position: absolute;" class="card-header">{{ __('Register') }}</div>
                <div style="position: absolute; right: 120px;" class="card-header"><a href="{{URL('/')}}">Register Device</a></div>
                <div style="position: absolute; right: 20px" class="card-header"><a href="{{URL('login')}}">Login</a></div>
                <center><img src="media/logo/logo.jpg" width="100px"></center>



                <div class="card-body">
                    {{-- failure --}}
                        @if (Session::has('failure'))
                            <div class="alert alert-info">{{ Session::get('failure') }}</div>
                        @endif
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="longitude" class="col-md-4 col-form-label text-md-right">{{ __('Longitude') }}</label>

                            <div class="col-md-6">
                                <input readonly id="lng" type="text" class="form-control" name="longitude" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="latitude" class="col-md-4 col-form-label text-md-right">{{ __('Latitude') }}</label>

                            <div class="col-md-6">
                                <input readonly id="lat" type="text" class="form-control" name="latitude" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
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
      demo.register();
    });
  </script>
  @endsection
