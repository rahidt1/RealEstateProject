<?php

namespace App\Http\Controllers;
use App\User;
use App\Division;
use App\District;

use Illuminate\Http\Request;

class ApiController extends Controller
{

    /*API*/
    public function getuser(){
    	$data = User::all();
    	return response()->json([
    		'status' => true,
    		'data' => $data,
    	]);
    }
    public function adduser(Request $request){
    	$obj = new User();
    	$obj->name = $request->name;
    	$obj->email = $request->email;
    	$obj->username = $request->username;
    	$obj->password = $request->password;
    	$obj->phone = $request->phone;
    	$obj->address = $request->address;
    	$obj->date_of_birth = $request->date_of_birth;
    	if($obj->save()){
    		return response()->json([
    			'status'=>true,
    			'messege'=> 'Succesfully inserted',
    		]);
    	}

    }
    /*AJax*/
    public function division(){
        $division = Division::all();
        return view('admins.pages.ajax',['division'=>$division]);
    }
    public function district($division_id){
        $district = District::where('division_id','=',$division_id)
                        ->get(); //Select * from districts where division_id =1/2/3...
        
        return response()->json([

            'data'=> $district,
            'success'=> true,

        ]);

    }
    public function ajaxform(){
        return view('admins.pages.ajaxform');
    }
    public function ajaxadd(Request $request){
        $obj = new User();
        $obj->company = $request->company;
        $obj->role = $request->role;
        if($obj->save()){
            return response()->json([
                'status'=>true,
                'messege'=> 'Succesfully inserted',
            ]);
        }

    }
}
