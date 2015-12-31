<?php

/**
 * Created by PhpStorm.
 * User: Anuradha Niroshan
 * Date: 12/12/2015
 * Time: 07:40
 */
use Illuminate\Database\Seeder;
class UserSeeder extends Seeder
{
    public function run()
    {
       \App\User::create(array('name'=>'anuradha','username'=>'anu123','password'=>'test','email'=>'anu@gmail.com'));
        \App\User::create(array('name'=>'kasun','username'=>'sd12','password'=>'ghost','email'=>'dev@gmail.com'));
        \App\User::create(array('name'=>'shanupa','username'=>'as56','password'=>'bean','email'=>'sri@gmail.com'));
        \App\User::create(array('name'=>'rashmi','username'=>'4589','password'=>'why','email'=>'shiva@gmail.com'));
        \App\User::create(array('name'=>'abc','username'=>'ty78','password'=>'who','email'=>'vibut@gmail.com'));
    }
}