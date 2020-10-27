@extends('layouts.app')
@section('authtitle','Raise a Ticket | Fix My Device')

@section('content')
    @include('users.partials.header', [
        'title' => __('Hello') . ' '. auth()->user()->name,
        'description' => __('Add A new Ticket'),
        'class' => 'col-lg-7'
    ])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                @if(auth()->user()->avatar != NULL)
                                    <img src="{{ auth()->user()->avatar }}" class="rounded-circle">
                                @else
                                <a href="#">
                                    <img src="{{ asset('argon') }}/img/theme/team-4-800x800.jpg" class="rounded-circle">
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        <div class="d-flex justify-content-between">
                        </div>
                    </div>
                    <div class="card-body pt-0 pt-md-4">
                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                    <form action="{{ route('profile_update') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <input type="file" name="filename" class="form-control form-control-alternative">
                                        </div>
                                        <div class="text-center">
                                            <input type="submit" class="btn btn-sm btn-info mr-4" value="Change Photo">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h3>
                                {{ auth()->user()->name }}<span class="font-weight-light">, change your profile image</span>
                            </h3>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="col-12 mb-0">{{ __('Add New Ticket') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('ticket.store') }}" autocomplete="off">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('User information') }}</h6>

                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                                    <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>

                        <hr class="my-4" />
                            <div class="pl-lg-4">
                                <div class="form-group" id="devicetype">
                                    <label class="form-control-label" for="desktop2">{{ __('Device Type') }}</label>
                                    <div class="cc-selector-2">
                                            @foreach($devices as $device)
                                            @if($device->userid == auth()->user()->id)
                                                @if($device->desktop)
                                                <input id="desktop2" type="radio" name="device_name" value="desktop" />
                                                <label class="drinkcard-cc desktop" for="desktop2"></label>
                                                @endif
                                                @if($device->laptop)
                                                <input id="mastercard2" type="radio" name="device_name" value="laptop" />
                                                <label class="drinkcard-cc laptop" for="mastercard2"></label>
                                                @endif
                                                @if($device->printer)
                                                <input id="printer2" type="radio" name="device_name" value="printer" />
                                                <label class="drinkcard-cc printer" for="printer2"></label>
                                                @endif
                                                @if($device->wifi)
                                                <input id="wifi2" type="radio" name="device_name" value="wifi" />
                                                <label class="drinkcard-cc wifi" for="wifi2"></label>
                                                @endif
                                                @if($device->router)
                                                <input id="router2" type="radio" name="device_name" value="router" />
                                                <label class="drinkcard-cc router" for="router2"></label>
                                                @endif
                                                @if($device->tablet)
                                                <input id="tablet2" type="radio" name="device_name" value="tablet" />
                                                <label class="drinkcard-cc tablet" for="tablet2"></label>
                                                @endif
                                                @if($device->mobile)
                                                <input id="mobile2" type="radio" name="device_name" value="mobile" />
                                                <label class="drinkcard-cc mobile" for="mobile2"></label>
                                                @endif
                                                @if($device->server)
                                                <input id="server2" type="radio" name="device_name" value="server" />
                                                <label class="drinkcard-cc server" for="server2"></label>
                                                @endif
                                                @if($device->firewall)
                                                <input id="firewall2" type="radio" name="device_name" value="firewall" />
                                                <label class="drinkcard-cc firewall" for="firewall2"></label>
                                                @endif
                                                @if($device->storage)
                                                <input id="storage2" type="radio" name="device_name" value="storage" />
                                                <label class="drinkcard-cc storage" for="storage2"></label>
                                                @endif
                                                @if($device->ups)
                                                <input id="ups2" type="radio" name="device_name" value="ups" />
                                                <label class="drinkcard-cc ups" for="ups2"></label>
                                                @endif
                                                @if($device->ipphone)
                                                <input id="ipphone2" type="radio" name="device_name" value="ipphone" />
                                                <label class="drinkcard-cc ipphone" for="ipphone2"></label>
                                                @endif
                                                @if($device->switch)
                                                <input id="switch2" type="radio" name="device_name" value="switch" />
                                                <label class="drinkcard-cc switch" for="switch2"></label>
                                                @endif
                                                @if($device->other)
                                                <input id="other2" type="radio" name="device_name" value="other" />
                                                <label class="drinkcard-cc other" for="other2"></label>
                                                @endif
                                            @else
                                                <p>You dont have any devices</p>
                                            @endif
                                            @endforeach
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="problem">{{ __('Define Problem') }}</label>
                                    <textarea type="text" name="problem" id="problem" class="form-control form-control-alternative" placeholder="{{ __('Describe the problem') }}" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="date_time">{{ __('When can we visit') }}</label>
                                    <input type="text" class="form-control" name="date_time" id="date_time" placeholder="{{ __('Eg: 12 June at 1PM') }}" required>
                                </div>
                                <div class="form-check">
                                        <input class="form-check-input" type="radio" name="address_accept" id="radio1" >
                                        <label for="address_accept">Continue with Old Address</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                        <input class="form-check-input" type="radio" name="address_accept" id="radio" >
                                        <label for="address_accept">To a new address</label>

                                        <div class="reveal-if-active">
                                            <div class="form-group">
                                                <label for="adresss">Address</label>
                                                <textarea class="form-control form-control-alternative" name="new_address" type="text" id="adresss" class="require-if-active" data-require-pair="#choice-animals-dogs" ></textarea>
                                            </div>
                                            <div class="form-group">
                                                    <label for="city">City</label>
                                                    <input class="form-control form-control-alternative" name="new_city" type="text" id="city" class="require-if-active" data-require-pair="#choice-animals-dogs" >
                                            </div>
                                            <div class="form-group">
                                                    <label for="state">State</label>
                                                    <input class="form-control form-control-alternative" name="new_state" type="text" id="state" class="require-if-active" data-require-pair="#choice-animals-dogs" >
                                            </div>
                                            <div class="form-group">
                                                    <label for="pincode">Pincode</label>
                                                    <input class="form-control form-control-alternative" name="pincode" type="text" id="pincode" class="require-if-active" data-require-pair="#choice-animals-dogs" >
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-success mt-4" value="Submit">
                                            </div>

                                        </div>
                                        <div class="reveal-if-active2">
                                                <div class="form-group">
                                                        <input type="submit" class="btn btn-success mt-4" value="Submit">
                                                </div>

                                            </div>
                                </div>
                                </div>
                            </div>
                        </form>
<br><br><br><br><br>  <br><br><br><br><br>  <br><br><br><br><br>
                    </div>
                </div>
            </div>
        </div>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

        @include('layouts.footers.auth')
    </div>
    <style>
        .cc-selector-2 input{
            position:absolute;
            z-index:999;
        }

        .desktop{background-image:url(http://127.0.0.1:8000/icons/desktop.jpg);}
        .laptop{background-image:url(http://127.0.0.1:8000/icons/laptop.jpg);}
        .printer{background-image:url(http://127.0.0.1:8000/icons/printer.jpg);}
        .wifi{background-image:url(http://127.0.0.1:8000/icons/wifi.png);}
        .router{background-image:url(http://127.0.0.1:8000/icons/router.jpg);}
        .tablet{background-image:url(http://127.0.0.1:8000/icons/tablet.jpg);}
        .mobile{background-image:url(http://127.0.0.1:8000/icons/mobile.jpg);}
        .server{background-image:url(http://127.0.0.1:8000/icons/server.png);}
        .firewall{background-image:url(http://127.0.0.1:8000/icons/firewall.jpg);}
        .storage{background-image:url(http://127.0.0.1:8000/icons/storage.jpg);}
        .ups{background-image:url(http://127.0.0.1:8000/icons/ups.jpg);}
        .ipphone{background-image:url(http://127.0.0.1:8000/icons/ipphone.png);}
        .switch{background-image:url(http://127.0.0.1:8000/icons/switch.jpg);}
        .other{background-image:url(http://127.0.0.1:8000/icons/other.png);}



        .cc-selector-2 input:active +.drinkcard-cc, .cc-selector input:active +.drinkcard-cc{opacity: .9;}
        .cc-selector-2 input:checked +.drinkcard-cc, .cc-selector input:checked +.drinkcard-cc{
            -webkit-filter: none;
            -moz-filter: none;
                    filter: none;
        }
        .drinkcard-cc{
            cursor:pointer;
            background-size:contain;
            background-repeat:no-repeat;
            display:inline-block;
            width:100px;height:70px;
            -webkit-transition: all 100ms ease-in;
            -moz-transition: all 100ms ease-in;
                    transition: all 100ms ease-in;
            -webkit-filter: brightness(1.8) grayscale(1) opacity(.7);
            -moz-filter: brightness(1.8) grayscale(1) opacity(.7);
                    filter: brightness(1.8) grayscale(1) opacity(.7);
        }
        .drinkcard-cc:hover{
            -webkit-filter: brightness(1.2) grayscale(.5) opacity(.9);
            -moz-filter: brightness(1.2) grayscale(.5) opacity(.9);
                    filter: brightness(1.2) grayscale(.5) opacity(.9);
        }

        /* Extras */
        a:visited{color:#888}
        a{color:#444;text-decoration:none;}
        p{margin-bottom:.3em;}
        .cc-selector-2 input{ margin: 5px 0 0 12px; }
        .cc-selector-2 label{ margin-left: 7px; }
        span.cc{ color:#6d84b4 }

        .reveal-if-active {
	  opacity: 0;
	  max-height: 0;
	  overflow: hidden;
	  font-size: 16px;
	  -webkit-transform: scale(0.8);
			  transform: scale(0.8);
	  transition: 0.5s;
	}
	.reveal-if-active label {
	  display: block;
	  margin: 0 0 0 0;
	}

    .reveal-if-active2 {
	  opacity: 0;
	  max-height: 0;
	  overflow: hidden;
	  font-size: 16px;
	  -webkit-transform: scale(0.8);
			  transform: scale(0.8);
	  transition: 0.5s;
	}
	.reveal-if-active2 label {
	  display: block;
	  margin: 0 0 0 0;
	}

	.reveal-if-active input[type=text] {
	  width: 100%;
	}
    .reveal-if-active2 input[type=text] {
	  width: 100%;
	}
	#radio:checked ~ .reveal-if-active, input[type="checkbox"]:checked ~ .reveal-if-active {
	  opacity: 1;
	  max-height: 100px;
	  padding: 10px 20px;
	  -webkit-transform: scale(1);
			  transform: scale(1);
	  overflow: visible;
	}

    #radio1:checked ~ .reveal-if-active2, input[type="checkbox"]:checked ~ .reveal-if-active2 {
	  opacity: 1;
	  max-height: 100px;
	  padding: 10px 20px;
	  -webkit-transform: scale(1);
			  transform: scale(1);
	  overflow: visible;
	}
        </style>


<script>
		var FormStuff = {

		  init: function() {
			this.applyConditionalRequired();
			this.bindUIActions();
		  },

		  bindUIActions: function() {
			$("input[type='radio'], input[type='checkbox']").on("change", this.applyConditionalRequired);
		  },

		  applyConditionalRequired: function() {

			$(".require-if-active").each(function() {
			  var el = $(this);
			  if ($(el.data("require-pair")).is(":checked")) {
				el.prop("required", true);
			  } else {
				el.prop("required", false);
			  }
			});

		  }

		};

		FormStuff.init();
<script>
@endsection
