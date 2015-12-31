<?php

/**
 * Created by PhpStorm.
 * User: Anuradha Niroshan
 * Date: 12/12/2015
 * Time: 08:14
 */
 use Illuminate\Database\Seeder;
class ProfileSeeder extends Seeder
{
    public function run()
    {
        \App\Profile::create(array('userid'=>1,'about'=>'anurdha is great'));
        \App\Profile::create(array('userid'=>2,'about'=>'yeah is great'));
        \App\Profile::create(array('userid'=>3,'about'=>'ret is weak'));
        \App\Profile::create(array('userid'=>4,'about'=>'pep is beek'));
    }

}