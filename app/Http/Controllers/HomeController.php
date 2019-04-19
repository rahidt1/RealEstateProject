<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Session;

class HomeController extends Controller
{
    public function home(){
    	return view('websites.pages.home');
    }
    public function about(){
    	return view('websites.pages.about');
    }
    public function properties(){
    	return view('websites.pages.properties');
    }
    public function news(){
    	return view('websites.pages.news');
    }
    public function contact(){
        return view('websites.pages.contact');
    }
    public function admin(){
        return view('admins.pages.home');
    }
    public function table(){
        return view('admins.pages.table');
    }
    public function register(){
        return view('admins.pages.register');
    }
    public function login(){
        return view('admins.pages.login');
    }
    public function storelogin(Request $request){
        $email = $request->email;
        $password = $request->password;
        $admin = Admin::where('email','=',$email)
                            ->where('password','=',$password)
                            ->first();
        if($admin){
            $request->session()->put('username',$admin->name);
            $request->session()->put('useremail',$admin->email);
            return redirect('/admin');
        } 

    }
    public function storetable(){
            $data=Admin::all();
            return view('admins.pages.table',['mydata'=>$data]);
        }   
}
