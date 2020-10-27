@extends('layouts.app')
@section('authtitle','Dashboard | Fix My Device')
@section('content')

    @if(auth()->user()->isAdmin == 1)
    @include('layouts.headers.cards')
    @endif
    @if(auth()->user()->isAdmin == 0)
    @include('layouts.headers.cards2')
    @endif
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('My Devices') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                @if(auth()->user()->isAdmin == 0)<a href="{{ route('add-device') }}" class="btn btn-sm btn-primary">{{ __('Add My Devices') }}</a>@endif
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>
                    @if($devicecount > 0 || auth()->user()->isAdmin == 1)
                    <div class="row container">
                        @if(auth()->user()->isAdmin == 1)
                                <div class="col-md-3">
                                    <img src="icons/desktop.jpg" style="width:100px;height:100px;">
                                </div>
                                <div class="col-md-3">
                                    <img src="icons/laptop.jpg" style="width:100px;height:100px;">
                                </div>
                                <div class="col-md-3">
                                    <img src="icons/printer.jpg" style="width:100px;height:100px;">
                                </div>
                                <div class="col-md-3">
                                    <img src="icons/wifi.png" style="width:100px;height:100px;">
                                </div><br>
                                <div class="col-md-3">
                                    <img src="icons/router.jpg" style="width:100px;height:100px;">
                                </div>
                                <div class="col-md-3">
                                    <img src="icons/tablet.jpg" style="width:100px;height:100px;">
                                </div>
                                <div class="col-md-3">
                                    <img src="icons/mobile.jpg" style="width:100px;height:100px;">
                                </div>
                                <div class="col-md-3">
                                    <img src="icons/server.png" style="width:100px;height:100px;">
                                </div><br>
                                <div class="col-md-3">
                                    <img src="icons/firewall.jpg" style="width:100px;height:100px;">
                                </div>
                                <div class="col-md-3">
                                    <img src="icons/storage.jpg" style="width:100px;height:100px;">
                                </div>
                                <div class="col-md-3">
                                    <img src="icons/ups.jpg" style="width:100px;height:100px;">
                                </div>
                                <div class="col-md-3">
                                    <img src="icons/ipphone.png" style="width:100px;height:100px;">
                                </div><br>
                                <div class="col-md-3">
                                    <img src="icons/switch.jpg" style="width:100px;height:100px;">
                                </div>
                        @else
                            @foreach($devices as $device)
                                @if($device->desktop)
                                    <div class="col-md-3">
                                        <img src="icons/desktop.jpg" style="width:100px;height:100px;">
                                    </div>
                                @endif
                                @if($device->laptop)
                                    <div class="col-md-3">
                                        <img src="icons/laptop.jpg" style="width:100px;height:100px;">
                                    </div>
                                @endif
                                @if($device->printer)
                                    <div class="col-md-3">
                                        <img src="icons/printer.jpg" style="width:100px;height:100px;">
                                    </div>
                                @endif
                                @if($device->wifi)
                                    <div class="col-md-3">
                                        <img src="icons/wifi.png" style="width:100px;height:100px;">
                                    </div>
                                @endif
                                @if($device->router)
                                    <div class="col-md-3">
                                        <img src="icons/router.jpg" style="width:100px;height:100px;">
                                    </div>
                                @endif
                                @if($device->tablet)
                                    <div class="col-md-3">
                                        <img src="icons/tablet.jpg" style="width:100px;height:100px;">
                                    </div>
                                @endif
                                @if($device->mobile)
                                    <div class="col-md-3">
                                        <img src="icons/mobile.jpg" style="width:100px;height:100px;">
                                    </div>
                                @endif
                                @if($device->server)
                                    <div class="col-md-3">
                                        <img src="icons/server.png" style="width:100px;height:100px;">
                                    </div>
                                @endif
                                @if($device->firewall)
                                    <div class="col-md-3">
                                        <img src="icons/firewall.jpg" style="width:100px;height:100px;">
                                    </div>
                                @endif
                                @if($device->storage)
                                    <div class="col-md-3">
                                        <img src="icons/storage.jpg" style="width:100px;height:100px;">
                                    </div>
                                @endif
                                @if($device->ups)
                                    <div class="col-md-3">
                                        <img src="icons/ups.jpg" style="width:100px;height:100px;">
                                    </div>
                                @endif
                                @if($device->ipphone)
                                    <div class="col-md-3">
                                        <img src="icons/ipphone.png" style="width:100px;height:100px;">
                                    </div>
                                @endif
                                @if($device->switch)
                                    <div class="col-md-3">
                                        <img src="icons/switch.jpg" style="width:100px;height:100px;">
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </div>
                    @else
                        <div class="container row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <div class="alert alert-primary" role="alert" align="center">
                                    <strong>No Device Added!</strong>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                            {{-- {{ $Devices1->links() }} --}}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
@endsection
