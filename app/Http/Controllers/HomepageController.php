<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Subscribe;
class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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



    public function contacted(Request $request){
        $to_email = $request->input('email');
        $to_name = $request->input('name');
        $phone = $request->input('phone');
        $message = $request->input('message');

        $data = array('name'=>$to_name, "body" => "New Response from Contact Form");
        Mail::send('emails.response', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
            ->subject('Your Response has been recorded');
            $message->from('noreply@findmydevice.xyz','Fix My Device');
        });


        $data2 = array('name'=>$to_name,'emaill'=>$to_email, 'phone'=>$phone,'messages'=>$message,"body" => "New Response from Contact Form");
        Mail::send('emails.self', $data2, function($message) use ($to_name, $to_email) {
            $message->to('dqureshiumar@gmail.com', 'Fix My Device')
            ->subject($to_name.' has filled website contact form.');
            $message->from('noreply@findmydevice.xyz','Fix My Device');
        });

        return redirect("/contact");
    }

    public function subscribe(Request $request)
    {
        $us_email = $request->input('subscribe');
        $s =  Subscribe::where('email',$us_email)->first();
        if($s){
            return redirect("/");
        }
        else{
            $subs = new Subscribe;
            $subs->email = $us_email;
            $subs->save();
            return redirect("/");
        
        }
    }
}
