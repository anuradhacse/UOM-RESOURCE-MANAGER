<?php

use Illuminate\Database\Seeder;

class VehicleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('vehicle')->insert([
          'registration_no'=>'EG36256',
          'model'=>'Van',
          'type'=>'Toyota',
          'capacity_seating'=>'15',
      ]);

        DB::table('vehicle')->insert([
            'registration_no'=>'IJ2656',
            'model'=>'Bus',
            'type'=>'Leyland',
            'capacity_seating'=>'54',
        ]);

        DB::table('vehicle')->insert([
            'registration_no'=>'YU36526',
            'model'=>'Bus',
            'type'=>'Toyota',
            'capacity_seating'=>'40',
        ]);

        DB::table('vehicle')->insert([
            'registration_no'=>'GH69853',
            'model'=>'Car',
            'type'=>'Mazda',
            'capacity_seating'=>'5',
        ]);

        DB::table('vehicle')->insert([
            'registration_no'=>'PN253615',
            'model'=>'Van',
            'type'=>'Toyota',
            'capacity_seating'=>'25',
        ]);

        DB::table('vehicle')->insert([
            'registration_no'=>'SD23656',
            'model'=>'Car',
            'type'=>'Honda',
            'capacity_seating'=>'5',
        ]);

        DB::table('vehicle')->insert([
            'registration_no'=>'DF25362',
            'model'=>'Cab',
            'type'=>'Toyota',
            'capacity_seating'=>'5',
        ]);
    }
}
