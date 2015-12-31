<?php
/**
 * Created by PhpStorm.
 * User: Anuradha Niroshan
 * Date: 12/12/2015
 * Time: 07:28
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Profile extends  Model
{
    protected $table='profile';
    protected $fillable=array('userid','about');


    //profile is a weak entity.it belong to a perticular user by userid
    public function getUser(){
        return $this->belongsTo('User','userid');
    }

}