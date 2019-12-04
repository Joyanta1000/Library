<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\admin;
use Session;

class adminController extends Controller
{
     public function create()
    {
        return view('admin.areg');
    }

      public function store(Request $request)
    {
        $this->validate($request,[
           //'id' => 'required|unique:libraries,id',
           'admin_name' => 'required',
           'email' => 'required|email|unique:admins,email',
           'phone' => 'required|max:11',
           'address' => 'required',
           'password' => 'required'
        ]);
//$id = $request->id;
$admin_name = $request->admin_name;
$email = $request->email;
$phone = $request->phone;
$address = $request->address;
$password = $request->password;


        $obj =new admin();
        //$obj->id = $id;
        $obj->admin_name = $admin_name;
        $obj->email = $email;
        $obj->phone = $phone;
        $obj->address = $address;
        $obj->password = $password;
       
        if($obj->save()){
        //echo 'Successfully Registered';
         return redirect('admin/alog');
        //return redirect('admin/abooklist');//->with('success','Data Added');
           // echo "<fieldset>". "$admin_name "." you successfully registered, now you can login by your email and password"."</fieldset>";
          // echo "$email";
    }
    }

    public function alogin(request $request)
    {
$email=$request->input('email');
$password=$request->input('password');

 $admin = admin::where('email','=',$email)
        ->where('password','=',$password)
        ->first();


if ($admin) {

 $request->session()->put('id',$admin->id);

   $request->session()->put('admin_name',$admin->admin_name);

   $request->session()->put('email',$admin->email);

   $request->session()->put('phone',$admin->phone);

   $request->session()->put('address',$admin->address);

   $request->session()->put('password',$admin->password);
  // return view('admin/own',['admins'=>$admin]);
  
//return redirect('/admin/own');
   return redirect('admin/own')->with('message', 'You Are Logged In Now!');
}

if (!$admin){
 return redirect('admin/alog')->with('message', 'Wrong Email or Password!');
}

//$data = ['admins'=>$admin];

 //return view('admin.own',$data);

 // return view('admin/o',['admins'=>$data]);
    }

    public function index()
    {
echo session()->get('email');
    }

     public function updateai(Request $request, $id)
    {

 $this->validate($request,[
           
           'admin_name' => 'required',
           'email' => 'required',
           'phone' => 'required',
           'address' => 'required',
           'password' => 'required'
           
        ]);
 $admin_name =$request->admin_name;
$email = $request->email;
$phone = $request->phone;
$address = $request->address;
$password = $request->password;


        $obj = admin::find($id);
           
             $obj->admin_name = $admin_name;
        $obj->email = $email;
        $obj->phone = $phone;
        $obj->address = $address;
        $obj->password = $password;
       

            if ($obj->save()) {
$request->session()->put('id',$obj->id);

   $request->session()->put('admin_name',$obj->admin_name);

   $request->session()->put('email',$obj->email);

   $request->session()->put('phone',$obj->phone);

   $request->session()->put('address',$obj->address);

   $request->session()->put('password',$obj->password);

              return redirect('admin/own')->with('message', 'Your info updated!');

            //return redirect('admin/own');
            }
    }
    public function logout(Request $request)
    {
      // $this->session()->logout();

        $request->session()->flush();

        return redirect('admin/alog');
    }


 public function updateapass(Request $request)
    {
        $this->validate($request,[
           
           'password' => 'required',

           'password1' => 'required|different:password',


          
           
        ]);

        $id = $request->id;
$password = $request->password;
$password1 = $request->password1;




 // $user = people::find($id);
$user = DB::table('admins')->where('id', '=',$id)

->where('password','=',$password)
->update(array('password' => $password1));

if ($user) {

$user = DB::table('admins')->where('id', '=',$id)

->first();

//->where('password','=',$password)
//->update(array('password' => $password1));


$request->session()->put('id',$user->id);

   $request->session()->put('admin_name',$user->admin_name);

   $request->session()->put('email',$user->email);

   $request->session()->put('phone',$user->phone);

   $request->session()->put('address',$user->address);

   $request->session()->put('password',$user->password);
 



  // return view('admin/own',['admins'=>$admin]);
  //echo "You Loggedin";
    return redirect('admin/chngaup')->with('message', 'Your password is successfully changed!');
//return redirect('user/uown');
}

if (!$user) {
    return redirect('admin/chngaup')->with('msg', 'Wrong password you entered!');
}
    
}
}
