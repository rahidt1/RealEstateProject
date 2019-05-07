<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class ApiController extends Controller
{
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
}
