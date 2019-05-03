<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\PropertyList;
use Session;
Use Image;
use App\ImageModel;

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


    /*Login Section*/

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


    /*Property Section*/

    public function addproperty(){
        return view('admins.pages.addproperty');
    }
        public function tableproperty(){
        $data=PropertyList::all();
        return view('admins.pages.tableproperty',['propertydata'=>$data]);
    }
    public function storeaddproperty(Request $request){
        $request->validate([
            'propertyname' => 'required',
            'location' => 'required',
            'price' => 'required|numeric',
            'address' => 'required',
            'owner' => 'required',
            'agentname' => 'required',
                        'propertyimages' => 'required',
                                    'propertydoc' => 'required',
        ]);

        $propertyname = $request->propertyname;
        $location = $request->location;
        $price = $request->price;
        $address = $request->address;
        $owner = $request->owner;
        $agentname = $request->agentname;
                $propertyimages = $request->propertyimages;
                        $propertydoc = $request->propertydoc;


        $obj = new PropertyList();
        $obj->propertyname=$propertyname;
        $obj->location=$location;
        $obj->price=$price;
        $obj->address=$address;
        $obj->owner=$owner;
        $obj->agentname=$agentname;
        $obj->propertyimages=$propertyimages;
        $obj->propertydoc=$propertydoc;

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
        $obj->propertyimages=$request->propertyimages;    
        $obj->propertydoc=$request->propertydoc;
        

        if($obj->save()){
            
            $request->session()->flash('alert-success', 'Successfully updated !');
            return redirect()->route('tableproperty');
        }

    }
    public function deleteaddproperty($id){
        PropertyList::find($id)->delete();
        return redirect()->route('tableproperty');
    }

    /*User Section*/

    public function registeruser(){
        return view('admins.pages.registeruser');
    }
    public function tableuser(){
        $data=User::all();
        return view('admins.pages.tableuser',['userdata'=>$data]);
    }
    public function storeregisteruser(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:4|max:50',
            'phone' => 'required|numeric|unique:users,phone|string:15',
            'address' => 'required',
            'date_of_birth' => 'required|date',
        ]);

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
    public function edituser($id){
        $obj=User::find($id);
        return view('admins.pages.edituser',['edituserlist'=>$obj]);
    }
    public function updateuser(Request $request,$id){
        $obj = User::find($id);
        $obj->name=$request->name;
        $obj->email=$request->email;
        $obj->username=$request->username;
        $obj->phone=$request->phone;
        $obj->address=$request->address;
        $obj->date_of_birth=$request->date_of_birth;
        

        if($obj->save()){
            
            $request->session()->flash('alert-success', 'Successfully updated !');
            return redirect()->route('tableuser');
        }

    }
    public function deleteuser($id){
        User::find($id)->delete();
        return redirect()->route('tableuser');
    }

    public function imageform(){
        return view('admins.pages.upload');
    }
    public function upload(Request $request){

        $image = $request->file('image');
        $filename = time().'.'.$image->getClientOriginalExtension();
     
   
        $destinationPath = public_path('/thumbnail');
        $img = Image::make($image->getRealPath());
        $img->resize(100, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$filename);

        $obj= new ImageModel();
        $obj->image=$filename;
        if($obj->save()){
            return redirect()->route('tableimage');
        }

    }
    public function tableimage(){
        $data=ImageModel::all();
        return view('admins.pages.tableimage',['imagedata'=>$data]);
    }
}
