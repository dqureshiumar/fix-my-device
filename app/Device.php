<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Device extends Eloquent
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'devices';
    protected $fillable = [
        'user_id', 'desktop', 'laptop','printer','wifi','router','tablet','mobile','server','firewall','storage','ups','ipphone','switch','other'
    ];
}
