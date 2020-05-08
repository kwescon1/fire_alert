@extends('layouts.form')

@section('content')
<div class="container" style="position:relative; top:200px;">
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- sucess --}}
                @if (Session::has('success'))
                    <div class="alert alert-info">{{ Session::get('success') }}</div>
                @endif
                {{-- failure --}}
                @if (Session::has('failure'))
                    <div class="alert alert-info">{{ Session::get('failure') }}</div>
                @endif

                <div style="position: absolute;" class="card-header">{{ __('Register Device') }}</div>
                <div style="position: absolute; right: 100px;" class="card-header"><a href="{{URL('register')}}">Register</a></div>
                <div style="position: absolute; right: 20px" class="card-header"><a href="{{URL('login')}}">Login</a></div>
                <center><img src="media/logo/logo.jpg" width="100px"></center>

                <div class="card-body">
                    <form method="POST" action="{{ url('register_device') }}">
                        @csrf

                        {{-- device id --}}
                        <div class="form-group row">
                            <label for="device_id" class="col-md-4 col-form-label text-md-right">Device ID</label>

                            <div class="col-md-6">
                                <input type="number" class="form-control" name="device_id" min="1" required autofocus>
                            </div>
                        </div>
                        {{-- customer name --}}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Customer Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="customer_name" min="1" required autofocus>
                            </div>
                        </div>
                        {{-- mobile number --}}
                        <div class="form-group row">
                            <label for="number" class="col-md-4 col-form-label text-md-right">Mobile Number</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="mobile_number" min="1" required autofocus>
                            </div>
                        </div>

                        {{-- location--}}
                        <div class="form-group row">
                            <label for="number" class="col-md-4 col-form-label text-md-right">Location</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="location" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register Device') }}
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

