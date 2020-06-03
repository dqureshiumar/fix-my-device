@extends('pages.app')
@section('pagetitle','Services-Home')
@section('content')
<br><br><br><br><br><br>
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
                    
                <img src="images/home.jpeg" class="img-fluid rounded mx-auto d-block" alt="Fix My Device">
                    
                    <div class="container">
                            <h1>Your Locations</h1>
                            <form action="{{ route('home-reg.store') }}" method="post">
                                    @csrf
                                    <div class="form-group{{ $errors->has('contact') ? ' has-danger' : '' }}">
                                        <label>Contact</label>

                                        <input type="text" class="form-control{{ $errors->has('contact') ? ' is-invalid' : '' }}" name="contact" id="contact" placeholder="{{ __('Your Contact Number') }}" required="">
                                        @if ($errors->has('contact'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('contact') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                                        <label>Add your Address</label>
                                        <textarea type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" id="address" placeholder="{{ __('Address') }}" required="" rows=10 cols=10></textarea>
                                        @if ($errors->has('address'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label class="mb-2">Select your State</label>
                                    <select name="state" id="state" class="form-control" required>
                                            <option></option>
                                            <option>Maharashtra</option>
                                            <option>Manipur</option>
                                            <option>Meghalaya</option>
                                            <option>Mizoram</option>
                                            <option>Nagaland</option>
                                            <option>Orissa</option>
                                            <option>Punjab</option>
                                            <option>Rajasthan</option>
                                            <option>Sikkim</option>
                                            <option>Tamil Nadu</option>
                                            <option>Telagana</option>
                                            <option>Tripura</option>
                                            <option>Uttaranchal</option>
                                            <option>Uttar Pradesh</option>
                                            <option>West Bengal</option>
                                    </select>
                                    </div>
                                    <div class="form-group{{ $errors->has('city') ? ' has-danger' : '' }}">
                                        <label>City</label>
                                        <input type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" id="city" name="city" placeholder="{{ __('City') }}" required="">
                                        @if ($errors->has('city'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('city') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="form-group{{ $errors->has('pincode') ? ' has-danger' : '' }}">
                                            <label>Pincode</label>
                                            <input type="text" class="form-control{{ $errors->has('pincode') ? ' is-invalid' : '' }}" id="pincode" name="pincode" placeholder="{{ __('Pincode') }}" required="">
                                            @if ($errors->has('pincode'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('pincode') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    <div align="center">
                                        <button type="submit" class="btn btn-primary submit mb-4">Continue</button>
                                    </div>
                                </form>

                    </div>
    </div>
</div>

@endsection