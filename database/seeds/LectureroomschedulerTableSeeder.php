<?php

use Illuminate\Database\Seeder;

class LectureroomschedulerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lectureroomscheduler')->insert([
            'user'=>'Saman',
            'room_id'=>'2563',
            'time_slot'=>'8.15-10.15',
             'date'=>'12/12/2015'

        ]);

             DB::table('lectureroomscheduler')->insert([
                 'user'=>'Jagath',
                 'room_id'=>'3863',
                 'time_slot'=>'1.15-3.15',
                 'date'=>'15/12/2015'

             ]);

        DB::table('lectureroomscheduler')->insert([
            'user'=>'Vishwa',
            'room_id'=>'4663',
            'time_slot'=>'10.15-11.15',
            'date'=>'5/11/2015'

        ]);

        DB::table('lectureroomscheduler')->insert([
            'user'=>'Dayan',
            'room_id'=>'7763',
            'time_slot'=>'10.15-11.15',
            'date'=>'2/2/2015'

        ]);

        DB::table('lectureroomscheduler')->insert([
            'user'=>'Gihan',
            'room_id'=>'5563',
            'time_slot'=>'3.15-5.15',
            'date'=>'10/10/2015'

        ]);

        DB::table('lectureroomscheduler')->insert([
            'user'=>'Tihan',
            'room_id'=>'6663',
            'time_slot'=>'8.15-10.15',
            'date'=>'28/12/2015'

        ]);
    }
}
