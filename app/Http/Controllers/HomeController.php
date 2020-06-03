<?php

namespace App\Http\Controllers;
use App\User;
use App\Ticket;
use App\Device;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $usercount = count(User::all());
        $ticketcount = count(Ticket::all());
        $users = User::all();
        $userauth = auth()->user();
        $userticketcount = count($userauth->Ticket);

        $devicecount = 0;

        $devices = Device::all();
        foreach($devices as $device){
            if($device->userid == auth()->user()->id){
                if($device->desktop){
                    $devicecount += 1;
                }
                if($device->laptop){
                    $devicecount += 1;
                }
                if($device->printer){
                    $devicecount += 1;
                }
                if($device->wifi){
                    $devicecount += 1;
                }
                if($device->router){
                    $devicecount += 1;
                }
                if($device->tablet){
                    $devicecount += 1;
                }
                if($device->mobile){
                    $devicecount += 1;
                }
                if($device->server){
                    $devicecount += 1;
                }
                if($device->firewall){
                    $devicecount += 1;
                }
                if($device->storage){
                    $devicecount += 1;
                }
                if($device->ups){
                    $devicecount += 1;
                }
                if($device->ipphone){
                    $devicecount += 1;
                }
                if($device->switch){
                    $devicecount += 1;
                }
                if($device->other){
                    $devicecount += 1;
                }
            }
        }
        return view('dashboard',['devicecount'=>$devicecount,'users'=>$users,'usercount'=>$usercount,'ticketcount'=>$ticketcount,'userticketcount'=>$userticketcount]);
    }


    
}
