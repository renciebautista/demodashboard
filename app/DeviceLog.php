<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeviceLog extends Model
{
	protected $fillable = ['value'];

    public function device_variable()
    {
    	return $this->belongsTo('App\DeviceVariable');    
    }
}
