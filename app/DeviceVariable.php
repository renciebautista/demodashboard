<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeviceVariable extends Model
{

    public function device()
    {
    	return $this->belongsTo('App\Device');    
    }

    public function logs(){
    	return $this->hasMany('App\DeviceLog'); 
    }

    public function latestLog()
	{
	  return $this->hasMany('App\DeviceLog')->latest()->take(2);
	}
}
