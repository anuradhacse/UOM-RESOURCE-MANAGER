<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Hash;
use DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function userSignup(){
        //logic of new user creation
        $signuprules=array(
            'name'=>'required|min:2',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6',
            'repassword'=>'required|same:password',
            'username'=>'required |alpha_num |unique:users|min:5'
        );

        $validation=Validator::make(Input::all(),$signuprules);
        if($validation->fails()){
            return Redirect::to('/')->with('error',$validation->errors()->first());
        }
        else{
            $user=new User();
            $user->name=Input::get('name');
            $user->username=Input::get('username');
            $user->password=Input::get('password');
          // $user->password=Hash::make(Input::get('password'));
            $user->email=Input::get('email');
            $user->save();
        }
   /* Mail::send('mailers',array('user'=>$user),function($message){

        $message->to(Input::get('email'),Input::get('name'))->subject('welcome to UOM App');
    });*/
    return Redirect::to('/')->with('error','User Created please login');
    }

    public function userSignin(){
        $username=Input::get('username');
        $password=Input::get('password');

      /*  if (Auth::attempt(array('username' => $username, 'password' => $password)))
        {
            return Redirect::intended('/home');
        }*/
       $users = DB::select('select * from users where username = ? and password=? ', [$username,$password]);
        if($users){
            return Redirect::intended('/home');
        }

       //return view('user.index', ['users' => $users]);
        return Redirect::to('/');

    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
