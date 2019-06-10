<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\Paginator;
use App\Http\Requests\UserStoreRequest;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\PropertyList;
use App\Rent;
use Session;
Use Image;
use App\ImageModel;
use PDF;
use DB;
use App\Division;
use App\District;
use Newsletter;

class HomeController extends Controller
{
    public function home(){
        $data=PropertyList::orderBy("id", 'desc')->take(3)->get();
        $rent = Rent::all();
    	return view('websites.pages.home',['mydata'=>$data,'rent'=>$rent]);
    }
    public function about(){
        $data=PropertyList::orderBy("id", 'desc')->take(3)->get();
    	return view('websites.pages.about',['mydata'=>$data]);
    }
    public function properties(){
        $data3=PropertyList::all();
        $data=PropertyList::inRandomOrder()->paginate(9);
        $data2=PropertyList::orderBy("id", 'desc')->take(3)->get();
    	return view('websites.pages.properties',['mydata'=>$data2,'data'=>$data,'alldata'=>$data3]);
    }
    public function singleproperty($id){
        $data=PropertyList::where('id',$id)->first();
        $data2=PropertyList::orderBy("id", 'desc')->take(3)->get();
        return view('websites.pages.singleproperty',['mydata'=>$data,'data'=>$data2]);
    }
    public function news(){
        $data=PropertyList::orderBy("id", 'desc')->take(3)->get();
    	return view('websites.pages.news',['mydata'=>$data]);
    }
    public function contact(){
        $data=PropertyList::orderBy("id", 'desc')->take(3)->get();
        return view('websites.pages.contact',['mydata'=>$data]);
    }

    /*Admin Panel*/
    public function admin($id){
        $data=User::where('id',$id)->first();
        return view('admins.pages.home',['userdata'=>$data]);
    }

    /*Property Section*/

    public function addproperty($id){
        $data2=User::find($id);
        $data=PropertyList::all();
        return view('admins.pages.addproperty',['userdata'=>$data2,'propertydata'=>$data]);
    }
    public function propertydetail($id){
        $data2=User::where('id',$id)->first();
        $data=PropertyList::where('id',$id)->first();
        return view('admins.pages.propertydetail',['propertydata'=>$data,'userdata'=>$data2]);
    }
    public function tableproperty($id){
        $data2=User::where('id',$id)->first();
        $data=PropertyList::all();
        return view('admins.pages.tableproperty',['propertydata'=>$data,'userdata'=>$data2]);
    }
    public function storeaddproperty(Request $request,$id){
        $new=User::find($id);
        $data=PropertyList::all();
        $request->validate([
            'propertyname' => 'required',
            'location' => 'required',
            'price' => 'required|numeric',
            'address' => 'required',
            'owner' => 'required',
            'agentname' => 'required',
        ]);


/*        $image = $request->file('image');
        $filename = time().'.'.$image->getClientOriginalExtension();
     
   
        $destinationPath = public_path('/property');
        $img = Image::make($image->getRealPath());
        $img->save($destinationPath.'/'.$filename);*/

        if($request->hasfile('image')){

            foreach($request->file('image') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/property/', $name);  
                $data[] = $name;  
            }
         }

        


        $obj = new PropertyList();
        /*$obj->image = $filename;*/
        $obj->image =json_encode($data);
        $obj->propertyname=$request->propertyname;
        $obj->location=$request->location;
        $obj->price=$request->price;
        $obj->address=$request->address;
        $obj->owner=$request->owner;
        $obj->agentname=$request->agentname;
        $obj->agentrole=$request->agentrole;
        $obj->agentphone=$request->agentphone;
        $obj->area=$request->area;
        $obj->bed=$request->bed;
        $obj->bath=$request->bath;
        $obj->patio=$request->patio;
        $obj->garage=$request->garage;
        $obj->description=$request->description;
        if($obj->save()){
            $request->session()->flash('alert-success', 'Successfully Registered !');
            return redirect()->route('tableproperty',['userdata'=>$new,'mydata'=>$obj,'propertydata'=>$data]);
        }
    }
    public function editaddproperty($id){
        $data=User::where('id',$id)->first();       
        $obj=PropertyList::find($id);
        return view('admins.pages.editproperty',['editlist'=>$obj,'userdata'=>$data]);
    }
    public function updateaddproperty(Request $request,$id){
        $obj = PropertyList::find($id);
        $obj->image=$request->image;
        $obj->propertyname=$request->propertyname;
        $obj->location=$request->location;
        $obj->price=$request->price;
        $obj->address=$request->address;
        $obj->owner=$request->owner;
        $obj->agentname=$request->agentname;
        $obj->agentrole=$request->agentrole;
        $obj->agentphone=$request->agentphone;
        $obj->area=$request->area;
        $obj->bed=$request->bed;
        $obj->bath=$request->bath;
        $obj->patio=$request->patio;
        $obj->garage=$request->garage;
        $obj->description=$request->description;
        

        if($obj->save()){
            
            $request->session()->flash('alert-success', 'Successfully updated !');
            return redirect()->route('tableproperty',$obj->id);
        }

    }
    public function deleteaddproperty($id){
        $obj=PropertyList::where('id',$id)->firstOrFail();
        $obj->delete();
        return redirect()->route('tableproperty',$obj->id);
    }

    /*Search Property*/

    public function search(Request $request){
        $request->validate([
            'search' => 'required|min:3',
        ]);
        $search = $request->get('search');
        $data2=PropertyList::orderBy("id", 'desc')->take(3)->get();
        $data=PropertyList::where('propertyname','like',"%$search%")
                                ->orWhere('location','like',"%$search%")
                                ->orWhere('country','like',"%$search%")
                                ->orWhere('view','like',"%$search%")
                                ->orWhere('price','<=',"$search")
                                ->paginate(6);
        return view('websites.pages.searchproperty',['searchresult'=>$data,'mydata'=>$data2]);
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
            $request->session()->put('userrole',$admin->role);
            return redirect()->route('admin',$admin->id);
        }
        else {
            $request->session()->flash('alert-danger', 'Invalid email/password !');
            return redirect()->route('login');
        }

    }
    public function logout(Request $request){
        Auth::logout();
        Session::flush();
        return redirect()->route('login');
    }

    /*User Section*/

    public function registeruser(){
        return view('admins.pages.registeruser');
    }
    public function tableuser($id){
        $data2=User::where('id',$id)->first();
        $data=User::all();
        return view('admins.pages.tableuser',['alluserdata'=>$data,'userdata'=>$data2]);
    }
    public function storeregisteruser(UserStoreRequest $request){

        $validated = $request->validated();

        $obj = new User();
        $obj->name=$request->name;
        $obj->email=$request->email;
        $obj->username=$request->username;
        $obj->password=$request->password;
        $obj->phone=$request->phone;
        $obj->address=$request->address;
        $obj->date_of_birth=$request->date_of_birth;


        if($obj->save()){
            $request->session()->flash('alert-success', 'Successfully Registered !');
            return redirect()->route('login');
        }
    }
    public function edituser($id){
        $data=User::where('id',$id)->first();
        $obj=User::find($id);
        return view('admins.pages.edituser',['edituserlist'=>$obj,'userdata'=>$data]);
    }
    public function updateuser(Request $request,$id){
        $obj = User::find($id);
        $obj->name=$request->name;
        $obj->email=$request->email;
        $obj->username=$request->username;
        $obj->phone=$request->phone;
        $obj->address=$request->address;
        $obj->date_of_birth=$request->date_of_birth;
        $obj->role=$request->role;
        

        if($obj->save()){
            
            $request->session()->flash('alert-success', 'Successfully updated !');
            return redirect()->route('tableuser',$obj->id);
        }

    }
    public function deleteuser($id){
        $obj=User::where('id',$id)->firstOrFail();
        $obj->delete();
        return redirect()->route('tableuser',$obj->id);
    }
    /*Profile*/
    public function profile($id){
        $data=User::where('id',$id)->first();
        return view ('admins.pages.profile',['userdata'=>$data]);
    }
    public function editprofile($id){
        $data=User::where('id',$id)->first();
        $obj=User::find($id);
        return view('admins.pages.editprofile',['editprofilelist'=>$obj,'userdata'=>$data]);
    }
    public function updateprofile(Request $request,$id){
        $obj = User::find($id);
        $obj->name=$request->name;
        $obj->email=$request->email;
        $obj->username=$request->username;
        $obj->phone=$request->phone;
        $obj->address=$request->address;
        $obj->date_of_birth=$request->date_of_birth;
        $obj->role=$request->role;
        

        if($obj->save()){
            
            $request->session()->flash('alert-success', 'Successfully updated !');
            return redirect()->route('profile',$obj->id);
        }

    }


    /*Image Upload*/

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

    public function imagemultiple(){
        return view('admins.pages.uploadmultiple');
    }
    public function uploadmultiple(Request $request){
/*        if($request->hasFile('image')){
            foreach ($request->image as $image) {
                $filename = time().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(100,100,function($constraint){
                    $constraint->aspectratio();
                })->save( public_path('/thumbnail/'.$filename));
                $data[]=$filename;

            }
        }
        $obj= new ImageModel();
        $obj->image=json_encode($data);*/

    if($request->hasfile('image'))
          {

            foreach($request->file('image') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/property/', $name);  
                $data[] = $name;  
            }
         }
        $obj= new ImageModel();
        $obj->image =json_encode($data);
        $obj->save();
        return redirect()->route('tableimagemultiple',['id' => $obj->id]);

        

    }
    public function tableimagemultiple($id){
        $data=ImageModel::where('id',$id)->first();
        return view('admins.pages.tableimagemultiple',['imagemultiple'=>$data]);
    }
    
    /*Foreign Key*/
    public function foreignkey(){
        $data= DB::table('hire_books as hb')
                    ->Join('users','hb.student_id','users.id')
                    ->Join('books','hb.book_id','books.id')
                    ->select('users.name as username','books.name as bookname','hb.hire_date')
                    ->get();
        dd($data);
    }

    /*PDF Download*/
    public function pdfpage(){
        return view('admins.pages.pdf');
    }
    public function pdf(){
       
        $pdf = PDF::loadview('admins.pages.pdf');
        return $pdf->download('tanvir.pdf');


    }



//API & Ajax in ApiController

/*Newsletter*/
public function subscribe(Request $request){

    $data=PropertyList::orderBy("id", 'desc')->take(3)->get();
    $rent = Rent::all();  
    if ( ! Newsletter::isSubscribed($request->email) ) 
        {
            Newsletter::subscribe($request->email);
            $request->session()->flash('alert-success', 'Successfully Subscribed !');
            return view('websites.pages.home',['mydata'=>$data,'rent'=>$rent]);
        }
        
    else{
    $request->session()->flash('alert-danger', 'This email is already subscribed');
    return view('websites.pages.home',['mydata'=>$data,'rent'=>$rent]);
    }

        
        
}

}
