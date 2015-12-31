<?php

use Illuminate\Database\Seeder;

class TimeslotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('timeslot')->insert([
            'timeslot'=>'8.15-10.15',
        ]);

        DB::table('timeslot')->insert([
            'timeslot'=>'10.15-12.15',
        ]);

        DB::table('timeslot')->insert([
            'timeslot'=>'1.15-3.15',
        ]);

        DB::table('timeslot')->insert([
            'timeslot'=>'3.15-5.15',
        ]);


    }
}
