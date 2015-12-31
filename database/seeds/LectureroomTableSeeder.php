<?php

use Illuminate\Database\Seeder;

class LectureroomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lectureroom')->insert([
            'id'=>'9632',
            'capacity'=>'65',
        ]);

        DB::table('lectureroom')->insert([
            'id'=>'6245',
            'capacity'=>'40',
        ]);

        DB::table('lectureroom')->insert([
            'id'=>'5623',
            'capacity'=>'100',
        ]);

        DB::table('lectureroom')->insert([
            'id'=>'3256',
            'capacity'=>'50',
        ]);

        DB::table('lectureroom')->insert([
            'id'=>'5632',
            'capacity'=>'75',
        ]);
    }
}
