@extends('layouts.app', ['title' => __('Ticket')])
@section('authtitle','Ticket | Fix My Device')
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
                                <h3 class="mb-0">{{ __('Tickets') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                @if(auth()->user()->isAdmin == 0)<a href="{{ route('ticket.create') }}" class="btn btn-sm btn-primary">{{ __('Raise an issue') }}</a>@endif
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
                                    <th scope="col">{{ __('Problem') }}</th>
                                    <th scope="col">{{ __('Date and Time of Visit') }}</th>
                                    <th scope="col">{{ __('Status') }}</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($ticket as $ticket1)
                                    <tr>
                                        <td>{{ $ticket1->device_name }}</td>
                                        <td>
                                           <p> {{ $ticket1->problem }}</p>
                                        </td>
                                        <td>{{ $ticket1->date_time }}</td>
                                        <td><a href="#" class="badge badge-success">{{$ticket1->status}}</a></td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    @if(auth()->user()->isAdmin == 1)
                                                        <form action="{{ route('ticket.destroy', $ticket1->id) }}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            
                                                        <a class="dropdown-item" href="{{ url('close/'.$ticket1->id) }}">{{ __('Close') }}</a>
                                                            <button type="button" class="dropdown-item" onclick="confirm('{{ __("Are you sure you want to delete this ticket1?") }}') ? this.parentElement.submit() : ''">
                                                                {{ __('Delete') }}
                                                            </button>
                                                        </form>  
                                                    @elseif ($ticket1->user_id == auth()->id())
                                                        <form action="{{ route('ticket.destroy', $ticket1->id) }}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            
                                                            <a class="dropdown-item" href="{{ url('close/'.$ticket1->id) }}">{{ __('Close') }}</a>
                                                            <button type="button" class="dropdown-item" onclick="confirm('{{ __("Are you sure you want to delete this ticket1?") }}') ? this.parentElement.submit() : ''">
                                                                {{ __('Delete') }}
                                                            </button>
                                                        </form>    
                                                    @else 
                                                        <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Edit') }}</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                            {{-- {{ $ticket1->links() }} --}}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
            
        @include('layouts.footers.auth')
    </div>
@endsection