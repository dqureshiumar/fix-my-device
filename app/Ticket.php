<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Ticket extends Eloquent
{

    protected $connection = 'mongodb';
    protected $collection = 'tickets';

    protected $fillable = [
        'user_id','device_name', 'problem', 'new_address','new_state','new_city','pincode','date_time','status'
    ];

    public function user(){
    return $this->belongsTo('App\User');
    }
}
