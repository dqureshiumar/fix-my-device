<?php

namespace App\Http\Controllers;

use App\User;
use App\Ticket;
use App\Device;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {

        $users = User::all();
        $usercount = count(User::all());
        $ticketcount = count(Ticket::all());
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

        return view('users.index',['devicecount'=>$devicecount,'users'=>$users,'usercount'=>$usercount,'ticketcount'=>$ticketcount,'userticketcount'=>$userticketcount]);
    }

    /**
     * Show the form for creating a new user
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $users = User::all();
        return view('users.create')->with('users', $users);
    }

    /**
     * Store a newly created user in storage
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  \App\User  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserRequest $request, User $model)
    {
        $model->create($request->merge(['password' => Hash::make($request->get('password'))])->all());

        return redirect()->route('user.index')->withStatus(__('User successfully created.'));
    }

    /**
     * Show the form for editing the specified user
     *
     * @param  \App\User  $user
     * @return \Illuminate\View\View
     */
    public function edit(User $user)
    {
        // $users = User::all();
        // $users = User::find($user);
        return view('users.edit',compact('user'));
    }

    /**
     * Update the specified user in storage
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UserRequest $request, User  $user)
    {
        $user->update(
            $request->merge(['password' => Hash::make($request->get('password'))])
                ->except([$request->get('password') ? '' : 'password']
        ));

        return redirect()->route('user.index')->withStatus(__('User successfully updated.'));
    }

    /**
     * Remove the specified user from storage
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User  $user)
    {
        $user->delete();

        return redirect()->route('user.index')->withStatus(__('User successfully deleted.'));
    }


}
