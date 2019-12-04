<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\people;
use Session;


class peopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.ureg');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeu(Request $request)
    {
         $this->validate($request,[
           //'id' => 'required|unique:libraries,id',
           'user_name' => 'required',
           
           'user_email' => 'required|email|unique:people,user_email',
           'nid' => 'required',
           'phone' => 'required|max:11',
           'address' => 'required',
           'password' => 'required'
        ]);
//$id = $request->id;
$user_name = $request->user_name;

$user_email = $request->user_email;
$nid = $request->nid;
$phone = $request->phone;
$address = $request->address;
$password = $request->password;
$approval = $request->approval;

//$password = Hash::make($pass);


        $obj =new people();
        //$obj->id = $id;
        $obj->user_name = $user_name;
        $obj->user_email = $user_email;
        $obj->nid = $nid;
        $obj->phone = $phone;
        $obj->address = $address;
        $obj->password = $password;
        $obj->approval = $approval;
       
        if($obj->save()){
            return redirect('user/file');

        //echo 'Successfully Registered';
         //return redirect('user/borrow');
        //return redirect('admin/abooklist');//->with('success','Data Added');
           // echo "<fieldset>". "$admin_name "." you successfully registered, now you can login by your email and password"."</fieldset>";
          // echo "$email";
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateu(Request $request, $id)
    {
        $this->validate($request,[
           
           'user_name' => 'required',
           'user_email' => 'required|email',
           'nid' => 'required',
           'phone' => 'required',
           'address' => 'required',
           'password' => 'required'
           
        ]);
 $user_name =$request->user_name;
$user_email = $request->user_email;
$nid = $request->nid;
$phone = $request->phone;
$address = $request->address;
$password = $request->password;


        $obj = people::find($id);
           
             $obj->user_name = $user_name;
        $obj->user_email = $user_email;
         $obj->nid = $nid;
        $obj->phone = $phone;
        $obj->address = $address;
        $obj->password = $password;
       

            if ($obj->save()) {

                 DB::table('borrows as b')
   ->join('people as p', 'b.uid', '=', 'p.id')
   ->update([ 'b.user_email' => DB::raw("`p`.`user_email`") ]);
              

$user = DB::table('people')->where('id', '=',$id)

->first();

//->where('password','=',$password)
//->update(array('password' => $password1));


$request->session()->put('id',$user->id);

   $request->session()->put('user_name',$user->user_name);

   $request->session()->put('user_email',$user->user_email);

$request->session()->put('nid',$user->nid);

   $request->session()->put('phone',$user->phone);

   $request->session()->put('address',$user->address);

   $request->session()->put('password',$user->password);
 
return redirect('user/uown')->with('message', 'Your info updated!');

            //return redirect('admin/own');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

     public function ulogin(request $request)
    {
$user_email=$request->input('user_email');
$password=$request->input('password');
$approval=$request->input('approval');

 DB::table('people')
  ->join('files', 'people.id', '=', 'files.id')
         ->select('files.name')
        ->get(); 
  




 $people = people::where('user_email','=',$user_email)
        ->where('password','=',$password)
        ->where('approval','=',$approval)
       ->join('files', 'people.id', '=', 'files.id')
        ->first();

  


if ($people) {

 


 $request->session()->put('id',$people->id);

   $request->session()->put('user_name',$people->user_name);

   $request->session()->put('user_email',$people->user_email);
    $request->session()->put('nid',$people->nid);

   $request->session()->put('phone',$people->phone);

   $request->session()->put('address',$people->address);

   $request->session()->put('password',$people->password);

    $request->session()->put('name',$people->name);
  // return view('admin/own',['admins'=>$admin]);
  //echo "You Loggedin";
    return redirect('user/uown')->with('message', 'You Are Logged In Now!');
//return redirect('user/uown');
}



if (!$people){
 return redirect('user/ulog')->with('message', 'Wrong Email or Password! OR Wait for admins approval');
  //return redirect('user/ulog')->with('msg', 'You need admins approval!');
}



//$data = ['admins'=>$admin];

 //return view('admin.own',$data);

 // return view('admin/o',['admins'=>$data]);
    }

      public function ulogout(Request $request)
    {
      // $this->session()->logout();

        $request->session()->flush();

        return redirect('user/ulog');
    }

     public function ulist(){
            $data = DB::table('people')
            ->join('files', 'people.id', '=', 'files.id')
        ->select('people.*', 'files.name')
        ->get();
            return view('admin/userlist',['people'=>$data]);
        }

         public function deleteul($id)
    {
        DB::table('people')->where('id',$id)->delete();
        DB::table('files')->where('id',$id)->delete();
        return redirect('admin/userlist')->with('message', 'You removed a user!');
    }

      public function updatepass(Request $request)
    {
        $this->validate($request,[
           
           'password' => 'required',

           'password1' => 'required|different:password',


          
           
        ]);

        $id = $request->id;
$password = $request->password;
$password1 = $request->password1;




 // $user = people::find($id);
$user = DB::table('people')->where('id', '=',$id)

->where('password','=',$password)
->update(array('password' => $password1));

if ($user) {

$user = DB::table('people')->where('id', '=',$id)

->first();

//->where('password','=',$password)
//->update(array('password' => $password1));


$request->session()->put('id',$user->id);

   $request->session()->put('user_name',$user->user_name);

   $request->session()->put('user_email',$user->user_email);

$request->session()->put('nid',$user->nid);

   $request->session()->put('phone',$user->phone);

   $request->session()->put('address',$user->address);

   $request->session()->put('password',$user->password);
 


 



  // return view('admin/own',['admins'=>$admin]);
  //echo "You Loggedin";
    return redirect('user/chngup')->with('message', 'Your password is successfully changed!');
//return redirect('user/uown');
}

if (!$user) {
    return redirect('user/chngup')->with('msg', 'Wrong password you entered!');
}
//   if (Hash::check($password, $user->password)) {
//     // $user->password = $password1;
//     return redirect('user/ulog');
// }
// else {
//     echo "wrong";
// }
  //->where('password','=',$password);
           
             
        // $obj->password = $password1;
       

        //     if ($obj->save()) {

             
        //       return redirect('user/ulog');

        //     //return redirect('admin/own');
        //     }
//}
//}




// $people = people::where('id','=',$id)
//         ->where('password','=',$password)
//         ->update(array('password' => $password1));
         

                 
//               return redirect('user/ulog');

            
            

// if ($password1) {
//    $password3=$password1;
// }


        //$obj = people::find($id);
           //$obj = people::where('id','=',$id)
 //DB::table('people')
 //->where('id','=',$id)
        //->where('password','=',$password)
      // ->limit(1)
     // ->update(array('password' => $password3));

       //$now_password  = Input::get('now_password');
// $user = DB::table('people')->where('id', '=',$id)->first();
        //if(Hash::check($password, $user->password)){
    //Your update here
            // $user->password = $password1;

            // return redirect('user/ulog');
//}
           
       //  $obj->password = $password;
     //  DB::table('people')
       // ->where('email', $userEmail)  // find your user by their email
       // ->limit(1)  // optional - to ensure only one record is updated.
       // ->update(array('member_type' => $plan));  // update the record in the DB. 
//return redirect('user/ulog');
           
    }


public function updateul(Request $request , $id)
{
$approval = $request->approval;

    $user = DB::table('people')->where('id', '=',$id)

//->where('approval','=',$approval)
->update(array('approval' => $approval));

return redirect('admin/userlist')->with('message', 'You updated the list!');
}

}
