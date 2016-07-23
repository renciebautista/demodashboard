<?php

use Illuminate\Database\Seeder;
use App\Device;
use App\DeviceVariable;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $d_temp =  new Device;
        $d_temp->name = 'Temperature Sensor';
        $d_temp->token = str_random(16);
        $d_temp->save();

        $d_var = new DeviceVariable(['name' => 'temp']);
        $d_var->device()->associate($d_temp);
        $d_var->save();

        $h_temp =  new Device;
        $h_temp->name = 'Humidity Sensor';
        $h_temp->token = str_random(16);
        $h_temp->save();

        $h_var = new DeviceVariable(['name' => 'hum']);
        $h_var->device()->associate($h_temp);
        $h_var->save();

        $wl_temp =  new Device;
        $wl_temp->name = 'Water Level Sensor';
        $wl_temp->token = str_random(16);
        $wl_temp->save();

        $wl_var = new DeviceVariable(['name' => 'wl']);
        $wl_var->device()->associate($wl_temp);
        $wl_var->save();

    }
}
