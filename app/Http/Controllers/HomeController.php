<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\PropertyList;
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
        $data=PropertyList::all();
        return view('admins.pages.table',['mydata'=>$data]);
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
        $admin = User::where('email','=',$email)
                            ->where('password','=',$password)
                            ->first();
        if($admin){
            $request->session()->put('username',$admin->name);
            $request->session()->put('useremail',$admin->email);
            return redirect()->route('admin');

        }
        else {
/*            return redirect()->back()->with('msg','Inavlid email or password');*/
            $request->session()->flash('alert-danger', 'Invalid email/password !');
            return redirect()->route('login');
        }

    }
    public function storeregister(Request $request){

        $propertyname = $request->propertyname;
        $location = $request->location;
        $price = $request->price;
        $address = $request->address;
        $owner = $request->owner;
        $agentname = $request->agentname;


        $obj = new PropertyList();
        $obj->propertyname=$propertyname;
        $obj->location=$location;
        $obj->price=$price;
        $obj->address=$address;
        $obj->owner=$owner;
        $obj->agentname=$agentname;

        if($obj->save()){
            $request->session()->flash('alert-success', 'Successfully Registered !');
            return redirect()->route('register');
        }
    }
    public function editregister($id){
        $obj=PropertyList::find($id);
        return view('admins.pages.edit',['editlist'=>$obj]);
    }
    public function updateregister(Request $request,$id){
        $obj = PropertyList::find($id);
        $obj->propertyname=$request->propertyname;
        $obj->location=$request->location;
        $obj->price=$request->price;
        $obj->address=$request->address;
        $obj->owner=$request->owner;
        $obj->agentname=$request->agentname;
        

        if($obj->save()){
            
            $request->session()->flash('alert-success', 'Successfully updated !');
            return redirect()->route('table');
        }

    }
    public function deleteregister($id){
        PropertyList::find($id)->delete();
        return redirect()->route('table');
    }
}
