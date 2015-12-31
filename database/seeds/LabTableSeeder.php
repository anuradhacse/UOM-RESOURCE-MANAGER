<?php

use Illuminate\Database\Seeder;

class LabTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lab')->insert([
            'lab_id'=>'2563',
            'capacity'=>'50',
            'type'=>'Networking',

        ]);

        DB::table('lab')->insert([
            'lab_id'=>'7896',
            'capacity'=>'50',
            'type'=>'Embeded Systems',

        ]);

        DB::table('lab')->insert([
            'lab_id'=>'6326',
            'capacity'=>'75',
            'type'=>'Networking',

        ]);

        DB::table('lab')->insert([
            'lab_id'=>'4512',
            'capacity'=>'150',
            'type'=>'Networking',

        ]);

        DB::table('lab')->insert([
            'lab_id'=>'2513',
            'capacity'=>'100',
            'type'=>'Embeded Systems',

        ]);

        DB::table('lab')->insert([
            'lab_id'=>'5263',
            'capacity'=>'50',
            'type'=>'Computer Architecture',

        ]);
    }
}
