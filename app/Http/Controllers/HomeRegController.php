<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Mail;

class HomeRegController extends Controller
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
        $id = Auth::id();
        $user = User::find($id);
        if($user->contact == NULL || $user->city == NULL || $user->state == NULL || $user->pincode ==NULL || $user->address == NULL )
        {
        return view('pages.home-reg');
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function index2()
    {
        return view('pages.nextpage');
    }


    public function adddevice()
    {
        return view('devices.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::id();
        $user = User::find($id);
        
        $user->contact = $request->input('contact');
        $user->address = $request->input('address');
        $user->state = $request->input('state');
        $user->city = $request->input('city');
        $user->pincode = $request->input('pincode');
        $user->save();
        return redirect('home');
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
        //
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
        //
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


    public function profile_update(Request $request)
    {
        if($request->hasFile('filename'))
        {
            // Get filename with the extension
            $filenameWithExt = $request->file('filename')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('filename')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('filename')->storeAs('public/profile', $fileNameToStore);
            
        } 
        else 
        {
            $fileNameToStore = NULL;
        }
        $my_id = auth()->user()->id;
        $user = User::find($my_id);
        
        $user->profile = $fileNameToStore;
        $user->save();
        return redirect('/profile');
    }


    public function address(){
        return view('devices.address');
    }
    public function address_update(Request $request)
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $user->address = $request->input('address');
        $user->state = $request->input('state');
        $user->city = $request->input('city');
        $user->pincode = $request->input('pincode');
        $user->save();
        return redirect('address');
    }
    
}
