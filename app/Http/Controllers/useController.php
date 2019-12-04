<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;


use App\Use;
use Session;

class useController extends Controller
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
           
           'email' => 'required|email|unique:uses,email',
           'nid' => 'required',
           'phone' => 'required|max:11',
           'address' => 'required',
           'password' => 'required'
        ]);
//$id = $request->id;
$user_name = $request->user_name;

$email = $request->email;
$nid = $request->nid;
$phone = $request->phone;
$address = $request->address;
$password = $request->password;


        $obj =new use();
        //$obj->id = $id;
        $obj->user_name = $user_name;
        $obj->email = $email;
        $obj->nid = $nid;
        $obj->phone = $phone;
        $obj->address = $address;
        $obj->password = $password;
       
        if($obj->save()){
       // echo 'Successfully Registered';
         return redirect('user/borrow');
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
    public function update(Request $request, $id)
    {
        //
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
}
