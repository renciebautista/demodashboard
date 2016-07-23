<?php

use Illuminate\Http\Request;
use App\Device;
use App\DeviceLog;
use App\DeviceVariable;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/devices', function () {
	$devices = Device::all();
    return view('device', compact('devices'));
});

Route::get('/', function () {
    return view('dashboard');
});


// update device value
Route::get('/api/device/update', function(Request $request){
	$device_token = $request->key;
	
	$device = Device::with('variables')->where('token', $device_token)->first();
	if($device){
		$variables = $request->except(['key']);
		if(empty($variables)){
			return response()->json(['status' => '0', 'msg' => "Device was found for this API key: $device_token, but invalid parameters" ]);
		}else{
			foreach ($variables as $key => $var) {
				$device_variable = $device->variables()->whereName($key)->first();
				if($device_variable){
					$log = new DeviceLog(['value' => $var]);
			        $log->device_variable()->associate($device_variable);
			        $log->save();
				}
			}
			return response()->json(['status' => '1', 'msg' => "Data saved for this API key: $device_token" ]);

		}
		

	}else{
		return response()->json(['status' => '0', 'msg' => "Device was found for this API key: $device_token"]);
	}
});

// retrive last value
Route::get('/api/device/', function(Request $request){
	$device_token = $request->key;
	
	$device = Device::with('variables')
		->with('variables.latestLog')
		->where('token', $device_token)->first();
	if($device){
		$data = [];
		foreach ($device->variables as $key => $value) {
			$values = [];
			foreach ($value->latestLog as $x) {
				$values[] = $x->value;
			}
			$current =  (isset($values[0]) ? $values[0] : 0);
			$last_value = (isset($values[1]) ? $values[1] : 0);
			$value_change = $current - $last_value;
			if($last_value == 0){
				$per_change = 0;
			}else{
				$per_change = ($value_change / $last_value) * 100;
			}
			

			$data[$value->name] = [$current, number_format($per_change, 3)];
		}
		return response()->json(['status' => '0', 'msg' => "Device found for this API key: $device_token", 'data' => $data]);
	}else{
		return response()->json(['status' => '0', 'msg' => "Device was found for this API key: $device_token"]);
	}
});


