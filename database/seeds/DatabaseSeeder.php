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

        $d_hum =  new Device;
        $d_hum->name = 'Humidity Sensor';
        $d_hum->token = str_random(16);
        $d_hum->save();

        $h_var = new DeviceVariable(['name' => 'hum']);
        $h_var->device()->associate($d_hum);
        $h_var->save();

        $d_wl =  new Device;
        $d_wl->name = 'Water Level Sensor';
        $d_wl->token = str_random(16);
        $d_wl->save();

        $wl_var = new DeviceVariable(['name' => 'wl']);
        $wl_var->device()->associate($d_wl);
        $wl_var->save();

        $d_guage =  new Device;
        $d_guage->name = 'Guage Sensor';
        $d_guage->token = str_random(16);
        $d_guage->save();

        $wl_var = new DeviceVariable(['name' => 'guage']);
        $wl_var->device()->associate($d_guage);
        $wl_var->save();

    }
}
