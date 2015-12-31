<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLectureroomshedulerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lectureroomscheduler', function (Blueprint $table) {
            $table->string('user');
            $table->integer('room_id');
            $table->string('time_slot');
            $table->date('date');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lectureroomscheduler');
    }
}
