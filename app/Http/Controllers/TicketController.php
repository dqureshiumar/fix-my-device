<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Mail;
use App\Ticket;
use App\User;
use App\Device;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $userauth = auth()->user();
        $userticketcount = count($userauth->Ticket);
        if(auth()->user()->isAdmin == 1){
            $ticket = Ticket::all();
        return view('layouts.ticket',['devicecount'=>$devicecount,'ticket'=>$ticket,'users'=>$users,'ticketcount'=>$ticketcount,'usercount'=>$usercount,'userticketcount' =>$userticketcount]);
        }
        else{
            $ticket = $user_id->ticket;
            return view('layouts.ticket',['devicecount'=>$devicecount,'ticket'=>$ticket,'users'=>$users,'ticketcount'=>$ticketcount,'usercount'=>$usercount,'userticketcount' =>$userticketcount]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $devices = Device::all();
        $users = User::all();
        return view('layouts.ticket.create2',['users'=>$users],['devices'=>$devices]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $ticket = new Ticket;
        $ticket->user_id = auth()->user()->id;
        $ticket->problem = $request->input('problem');
        $ticket->device_name= $request->input('device_name');
        $ticket->new_address = $request->input('new_address');
        $ticket->new_state = $request->input('new_state');
        $ticket->new_city = $request->input('new_city');
        $ticket->pincode = $request->input('pincode');
        $ticket->date_time = $request->input('date_time');
        $to_name = $request->input('name');
        $to_email=$request->input('email');
        $device= $request->input('device_name');
        $visit = $request->input('date_time');

        
        $status = "Open";
        $data = array('name' => $to_name, "device" => $device, "visit" => $visit,"email" => $to_email,"status"=>$status);
        Mail::send('emails.ticket', $data, function($message) use ($to_name, $to_email) {
            $message->to('dqureshiumar@gmail.com', 'Fix My Device')
            ->subject($to_name.' has raised a Ticket');
            $message->from('noreply@fixmydevice.xyz','Fix My Device');
        });
        $data = array('name' => $to_name, "device" => $device, "visit" => $visit,"email" => $to_email,"status"=>$status);
        Mail::send('emails.mytick', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
            ->subject($to_name.', your Ticket has been successfully raised');
            $message->from('noreply@fixmydevice.xyz','Fix My Device');
        }); 
        $ticket->save();
        return redirect('/home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User  $user)
    {
        $status ='closed';
        $user->update(
            $request->merge(['status' => $status])
        );
        $to_name = $user->ticket->name; 
        $to_email = auth()->user()->email;
        // Mail::send(['text'=>'updatemail'],['name','IT GATEWAY SOLUTIONS'],function($message) use ($to_name, $to_email) {
        //     $message->to($to_email,$to_name)->subject('Your Ticket has been Closed');
        //     $message->from('dqureshiumar@gmail.com','IT GATEWAY SOLUTIONS');
        // });

        // Mail::send(['text'=>'mail'],['name','IT GATEWAY SOLUTIONS'],function($message) use ($to_name, $to_email) {
        //     $message->to('antriksh@psyber.co','IT Gateway')->subject($to_name.'has been Closed');
        //     $message->from('dqureshiumar@gmail.com','IT GATEWAY SOLUTIONS');
        // });
        // $ticket->save();
        return redirect('/ticket');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticket = Ticket::find($id);
        $ticket->delete();
        return redirect('ticket');   
    }

    public function ticketclose($id)
    {
        $to_email = auth()->user()->email;
        $to_name = auth()->user()->name;

        $ticket = Ticket::find($id);

        $ticket->status = "Closed";
        $device = $ticket->device_name;
        $visit = $ticket->date_time;
        $status = "Closed";
        $data = array('name' => $to_name, "device" => $device, "visit" => $visit,"email" => $to_email,"status"=>$status);
        Mail::send('emails.closetick', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
            ->subject('Ticket has been closed');
            $message->from('noreply@fixmydevice.xyz','Fix My Device');
        });

        $data = array('name' => $to_name, "device" => $device, "visit" => $visit,"email" => $to_email,"status"=>$status);
        Mail::send('emails.closetick', $data, function($message) use ($to_name, $to_email) {
            $message->to('dqureshiumar@gmail.com', 'Fix My Device')
            ->subject('Ticket has been closed');
            $message->from('noreply@fixmydevice.xyz','Fix My Device');
        });
        $ticket->save();
        return redirect('ticket');
    }
}
