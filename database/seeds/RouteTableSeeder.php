<?php

/**
 * Created by PhpStorm.
 * User: Anuradha Niroshan
 * Date: 17/12/2015
 * Time: 09:02
 */
use Illuminate\Database\Seeder;
class RouteTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('routes')->insert([
            'route_id' => '001',
            'destination'=>'Colombo Fort',
        ]);
        DB::table('routes')->insert([
            'route_id' => '002',
            'destination'=>'Maharagama',
        ]);
        DB::table('routes')->insert([
            'route_id' => '003',
            'destination'=>'Kurunegala',
        ]);
        DB::table('routes')->insert([
            'route_id' => '004',
            'destination'=>'Kandy',
        ]);

    }
}