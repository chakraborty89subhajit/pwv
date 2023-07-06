<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dbcontroller extends Controller
{
    //

    public function index(){

//return all data from database
//$data=DB::table("student")->get();

//using where clause
        
//$data=DB::table("student")->where('marks','100')->get();
        
        //where clause using associative array
//$data=DB::table("student")->where(['marks'=>'100','sname'=>' '])->get();

  //multiple where clause
//$data=DB::table("student")->where('marks','100')->where('sname',' ')->get();

//greater then and less then opt
//$data=DB::table("student")->where('marks','<','100')->get();

//between the range
//$data=DB::table("student")->where('marks','>','1')->where('marks','<','1100')->get();



//insert
      $xyz= DB::table("student")->insert([
'sno'=>"562",'sname'=>"virat K",'marks'=>"500"
     ]);

      //print_r($xyz);
        //return $data;
return view("student",compact('data'));
    }
}
