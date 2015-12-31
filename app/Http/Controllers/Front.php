<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class Front extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function vehicle()
    {
        $data=DB::select('select*from routes');
		return view('VehicleBooking',compact('data'));
		
    }
	public function namelist()
    {
       return view('list');
    }
	public function freeVehicle()
    {
		$dest=$_GET['destination'];
		$email=$_GET['email'];
		$capacity=$_GET['capacity'];
		$type=$_GET['type'];
		$start_date=$_GET['start_date'];
		$end_date=$_GET['end_date'];
		$data=DB::select("select* from vehicle where capacity_seating>=? and type='".$type."'",['capacity']);
       return view('freeVehicles',compact('data','dest','email','start_date','end_date'));
    }
	public function reservation()
    {
       $dest=$_GET['destination'];
		$email=$_GET['email'];
		$start_date=$_GET['start_date'];
		$end_date=$_GET['end_date'];
		$vehicle_no=$_GET['vehicle_no'];
		DB::insert("insert into tours (start_date,end_date,destination,booked_email,vehicle_no) values ('".$start_date."','".$end_date."','".$dest."','".$email."','".$vehicle_no."')");
		return view('bookingSuccess');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function viewLab()
    {
        $data=DB::select('select*from lab');
		return view('viewLabs',compact('data'));
		
    }
	public function viewRoom()
    {
        $data=DB::select('select*from lectureroom');
		return view('viewRooms',compact('data'));
		
    }
	public function viewVehicle()
    {
        $data=DB::select('select*from vehicle');
		return view('viewVehicles',compact('data'));
		
    }
}
