<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    public function variables()
    {
    	return $this->hasMany('App\DeviceVariable');
    }
}
