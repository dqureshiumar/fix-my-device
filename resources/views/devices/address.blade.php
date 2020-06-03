@extends('layouts.app', ['title' => __('Update Address')])
@section('authtitle','Update Address | Fix My Device')
@section('content')
    @include('users.partials.header', ['title' => __('Update Address')])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Update Address') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="home" class="btn btn-sm btn-primary">{{ __('Return to Dashboard') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('update_address') }}" autocomplete="off">
                            @csrf
                            
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-address">{{ __('Address') }}</label>
                                    <textarea type="text" name="address" id="input-address" class="form-control form-control-alternative{{ $errors->has('address') ? ' is-invalid' : '' }}" placeholder="{{ __('Address..') }}" value="{{ old('address') }}" required autofocus></textarea>

                                    @if ($errors->has('address'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('state') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-state">{{ __('State') }}</label>
                                    <input type="state" name="state" id="input-state" class="form-control form-control-alternative{{ $errors->has('state') ? ' is-invalid' : '' }}" placeholder="{{ __('State') }}" value="{{ old('state') }}" required>

                                    @if ($errors->has('state'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('state') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('city') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-city">{{ __('City') }}</label>
                                    <input type="text" name="city" id="input-city" class="form-control form-control-alternative{{ $errors->has('city') ? ' is-invalid' : '' }}" placeholder="{{ __('City') }}" value="" required>
                                    
                                    @if ($errors->has('city'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('city') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('pincode') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-pincode">{{ __('Pincode') }}</label>
                                    <input type="text" name="pincode" id="input-pincode" class="form-control form-control-alternative{{ $errors->has('pincode') ? ' is-invalid' : '' }}" placeholder="{{ __('Pincode') }}" value="" required>
                                    
                                    @if ($errors->has('pincode'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('pincode') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Update') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection