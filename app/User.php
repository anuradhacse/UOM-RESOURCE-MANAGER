<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password ','remember_token'];


    /*relationships
    user and the profile -one to one*/

    public function getProfile(){

        return $this->hasOne('\App\Profile','userid');

    }

    //one user has written many blogs-one to many relationship

    public function hasWritten(){
        return $this->hasMany('\App\Blog','writer_id');
    }

    /*read relationship many to many
    first parameter-model in relation with
    second para pivot table
    3rd para forign key for this table
    4 th para forign key for other table*/

    public function hasRead(){
        return $this->belongsToMany('\App\Blog','Blogreader','reader_id','blog_id');
    }

    public function getAuthPassword() {
        return $this->password;
    }

}
