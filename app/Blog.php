<?php
/**
 * Created by PhpStorm.
 * User: Anuradha Niroshan
 * Date: 12/12/2015
 * Time: 07:36
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Blog extends  Model
{
    protected $table='blogs';
    protected $fillable=array('writer_id','title','content');

    //one blog can only be written by
    public function getAuthor(){

        return $this->belongsTo('\App\User','writer_id');
    }
//many to many relatonship one blog read by many readers
    public function getReader(){
        return $this->belongsToMany('\App\User','Blogreader','blog_id','reader_id');
    }
}