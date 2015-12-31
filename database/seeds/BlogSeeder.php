<?php

/**
 * Created by PhpStorm.
 * User: Anuradha Niroshan
 * Date: 12/12/2015
 * Time: 08:29
 */
class BlogSeeder extends \Illuminate\Database\Seeder
{
    public function run(){

        \App\Blog::create(array('writer_id'=>1,'title'=>'hey baba','content'=>'very bad'));
        \App\Blog::create(array('writer_id'=>1,'title'=>'hey manika','content'=>'very bad'));
        \App\Blog::create(array('writer_id'=>2,'title'=>'nil wakka','content'=>'very good'));
        \App\Blog::create(array('writer_id'=>3,'title'=>'thor','content'=>'very but'));
        \App\Blog::create(array('writer_id'=>4,'title'=>'hey nre','content'=>'very sin'));
    }


}