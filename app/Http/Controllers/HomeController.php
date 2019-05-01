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
    public function tableproperty(){
        $data=PropertyList::all();
        return view('admins.pages.tableproperty',['mydata'=>$data]);
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
    public function addproperty(){
        return view('admins.pages.addproperty');
    }
    public function storeaddproperty(Request $request){

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
            return redirect()->route('tableproperty');
        }
    }
    public function editaddproperty($id){
        $obj=PropertyList::find($id);
        return view('admins.pages.editproperty',['editlist'=>$obj]);
    }
    public function updateaddproperty(Request $request,$id){
        $obj = PropertyList::find($id);
        $obj->propertyname=$request->propertyname;
        $obj->location=$request->location;
        $obj->price=$request->price;
        $obj->address=$request->address;
        $obj->owner=$request->owner;
        $obj->agentname=$request->agentname;
        

        if($obj->save()){
            
            $request->session()->flash('alert-success', 'Successfully updated !');
            return redirect()->route('tableproperty');
        }

    }
    public function deleteaddproperty($id){
        PropertyList::find($id)->delete();
        return redirect()->route('tableproperty');
    }
    public function registeruser(){
        return view('admins.pages.registeruser');
    }
    public function storeregisteruser(Request $request){

        $name = $request->name;
        $email = $request->email;
        $username = $request->username;
        $password = $request->password;
        $phone = $request->phone;
        $address = $request->address;
        $date_of_birth = $request->date_of_birth;


        $obj = new User();
        $obj->name=$name;
        $obj->email=$email;
        $obj->username=$username;
        $obj->password=$password;
        $obj->phone=$phone;
        $obj->address=$address;
        $obj->date_of_birth=$date_of_birth;


        if($obj->save()){
            $request->session()->flash('alert-success', 'Successfully Registered !');
            return redirect()->route('login');
        }
    }
}
