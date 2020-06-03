<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Device;
use Auth;
use Mail;
use App\Ticket;
use App\User;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $usercount = count(User::all());
        $ticketcount = count(Ticket::all());
        $user_id = auth()->user();
        $users = User::all();
        $devices = Device::all();
        $userauth = auth()->user();
        $userticketcount = count($userauth->Ticket);
        if(auth()->user()->isAdmin == 1){
            $ticket = Ticket::all();
        return view('devices.index',['devicecount'=>$devicecount,'devices'=>$devices,'ticket'=>$ticket,'users'=>$users,'ticketcount'=>$ticketcount,'usercount'=>$usercount,'userticketcount' =>$userticketcount]);
        }
        else{
            $ticket = $user_id->ticket;

            return view('devices.index',['devicecount'=>$devicecount,'devices'=>$devices,'ticket'=>$ticket,'users'=>$users,'ticketcount'=>$ticketcount,'usercount'=>$usercount,'userticketcount' =>$userticketcount]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $useridd = auth()->user()->id;
        $device = Device::where('userid',$useridd)->first();
        if($device){
            $device->userid = auth()->user()->id;
            $device->desktop = $request->input('desktop');
            $device->laptop = $request->input('laptop');
            $device->printer = $request->input('printer');
            $device->wifi = $request->input('wifi');
            $device->router = $request->input('router');
            $device->tablet = $request->input('tablet');
            $device->mobile = $request->input('mobile');
            $device->server = $request->input('server');
            $device->firewall = $request->input('firewall');
            $device->storage = $request->input('storage');
            $device->ups = $request->input('ups');
            $device->ipphone = $request->input('ipphone');
            $device->switch = $request->input('switch');
            $device->other = $request->input('other');
            $device->save();
            return redirect('mydevice');
        }
        else{
        $device2 = new Device;
        $device2->userid = auth()->user()->id;
        $device2->desktop = $request->input('desktop');
        $device2->laptop = $request->input('laptop');
        $device2->printer = $request->input('printer');
        $device2->wifi = $request->input('wifi');
        $device2->router = $request->input('router');
        $device2->tablet = $request->input('tablet');
        $device2->mobile = $request->input('mobile');
        $device2->server = $request->input('server');
        $device2->firewall = $request->input('firewall');
        $device2->storage = $request->input('storage');
        $device2->ups = $request->input('ups');
        $device2->ipphone = $request->input('ipphone');
        $device2->switch = $request->input('switch');
        $device2->other = $request->input('other');
        $device2->save();
        return redirect('mydevice');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
