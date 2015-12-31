<?php
/**
 * Created by PhpStorm.
 * User: Anuradha Niroshan
 * Date: 16/12/2015
 * Time: 09:34
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Lectureroom extends Model
{
    protected $table='lectureroom';
    protected $fillable=array('id','capacity');

}