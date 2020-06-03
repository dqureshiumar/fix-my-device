@extends('layouts.app', ['title' => __('Devices')])
@section('authtitle','My Devices | Fix My Device')
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

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">{{ __('Device Name') }}</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(auth()->user()->isAdmin == 1)
                                <tr>
                                    <td>Desktop</td><td><img src="icons/desktop.jpg" style="width:100px;height:100px;"></td>
                                </tr>
                                <tr>
                                    <td>Laptop</td><td><img src="icons/laptop.jpg" style="width:100px;height:100px;"></td>
                                </tr>
                                <tr>
                                    <td>Printer</td><td><img src="icons/printer.jpg" style="width:100px;height:100px;"></td>
                                </tr>
                                <tr>
                                    <td>wifi</td><td><img src="icons/wifi.png" style="width:100px;height:100px;"></td>
                                </tr>
                                <tr>
                                    <td>Router</td><td><img src="icons/router.jpg" style="width:100px;height:100px;"></td>
                                </tr>
                                <tr>
                                    <td>Tablet</td><td><img src="icons/tablet.jpg" style="width:100px;height:100px;"></td>
                                </tr>
                                <tr>
                                    <td>Mobile</td><td><img src="icons/mobile.jpg" style="width:100px;height:100px;"></td>
                                </tr>
                                <tr>
                                    <td>Server</td><td><img src="icons/server.png" style="width:100px;height:100px;"></td>
                                </tr>
                                <tr>
                                    <td>Firewall</td><td><img src="icons/firewall.jpg" style="width:100px;height:100px;"></td>
                                </tr>
                                <tr>
                                    <td>Storage</td><td><img src="icons/storage.jpg" style="width:100px;height:100px;"></td>
                                </tr>
                                <tr>
                                    <td>Ups</td><td><img src="icons/ups.jpg" style="width:100px;height:100px;"></td>
                                </tr>
                                <tr>
                                    <td>IP - Phone</td><td><img src="icons/ipphone.png" style="width:100px;height:100px;"></td>
                                </tr>
                                <tr>
                                    <td>Switch</td><td><img src="icons/switch.jpg" style="width:100px;height:100px;"></td>
                                </tr>
                                @else
                                    @foreach($devices as $device)
                                        @if($device->desktop)
                                            <tr>
                                                <td>Desktop</td><td><img src="icons/desktop.jpg" style="width:100px;height:100px;"></td>
                                            </tr>
                                        @endif
                                        @if($device->laptop)
                                            <tr>
                                                <td>Laptop</td><td><img src="icons/laptop.jpg" style="width:100px;height:100px;"></td>
                                            </tr>
                                        @endif
                                        @if($device->printer)
                                            <tr>
                                                <td>Printer</td><td><img src="icons/printer.jpg" style="width:100px;height:100px;"></td>
                                            </tr>
                                        @endif
                                        @if($device->wifi)
                                            <tr>
                                                <td>wifi</td><td><img src="icons/wifi.png" style="width:100px;height:100px;"></td>
                                            </tr>
                                        @endif
                                        @if($device->router)
                                            <tr>
                                                <td>Router</td><td><img src="icons/router.jpg" style="width:100px;height:100px;"></td>
                                            </tr>
                                        @endif
                                        @if($device->tablet)
                                            <tr>
                                                <td>Tablet</td><td><img src="icons/tablet.jpg" style="width:100px;height:100px;"></td>
                                            </tr>
                                        @endif
                                        @if($device->mobile)
                                            <tr>
                                                <td>Mobile</td><td><img src="icons/mobile.jpg" style="width:100px;height:100px;"></td>
                                            </tr>
                                        @endif
                                        @if($device->server)
                                            <tr>
                                                <td>Server</td><td><img src="icons/server.png" style="width:100px;height:100px;"></td>
                                            </tr>
                                        @endif
                                        @if($device->firewall)
                                            <tr>
                                                <td>Firewall</td><td><img src="icons/firewall.jpg" style="width:100px;height:100px;"></td>
                                            </tr>
                                        @endif
                                        @if($device->storage)
                                            <tr>
                                                <td>Storage</td><td><img src="icons/storage.jpg" style="width:100px;height:100px;"></td>
                                            </tr>
                                        @endif
                                        @if($device->ups)
                                            <tr>
                                                <td>Ups</td><td><img src="icons/ups.jpg" style="width:100px;height:100px;"></td>
                                            </tr>
                                        @endif
                                        @if($device->ipphone)
                                            <tr>
                                                <td>IP - Phone</td><td><img src="icons/ipphone.png" style="width:100px;height:100px;"></td>
                                            </tr>
                                        @endif
                                        @if($device->switch)
                                            <tr>
                                                <td>Switch</td><td><img src="icons/switch.jpg" style="width:100px;height:100px;"></td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                            {{-- {{ $Devices1->links() }} --}}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
            
        @include('layouts.footers.auth')
    </div>
@endsection