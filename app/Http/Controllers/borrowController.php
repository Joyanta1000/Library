<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

use App\borrow;
use Session;
use DateTime;

class borrowController extends Controller
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
        return view('user.borrow');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storebb(Request $request)
    {
        $this->validate($request,[
           'id' => 'required|unique:borrows,id|exists:libraries,id',
           'user_email' => 'required',
           'uid' => 'required',
           'stock' => 'required',
           //'btime' => 'required',
           //'rtime' => 'required|integer',
           
        ]);
$now = new DateTime();
$id = $request->input('id');
$user_email = $request->input('user_email');
$uid = $request->input('uid');
$stock = $request->input('stock');
$btime = $now;


$s = $request->input('s');
//$rtime = $request->rtime;



$values = array('id' => $id,'user_email' => $user_email,'uid' => $uid,'stock' => $stock, 'btime' => $btime, 'rtime' => ' ','s' => $s);

DB::table('borrows')->insert($values);
DB::table('libraries as l')
   ->join('borrows as b', 'l.id', '=', 'b.id')
   ->update([ 'l.stock' => DB::raw("`b`.`stock`") ]);


return redirect('user/borrow')->with('message', 'Borrowed a book!');
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
    public function updatebb(Request $request)
    {
        $this->validate($request,[
           'id' => 'required|exists:borrows,id',
           'user_email' => 'required',
           'uid' => 'required',
           'stock' => 'required',
           //'btime' => 'required',
           //'rtime' => 'required',
           
        ]);
       
 $now = new DateTime();
$id = $request->input('id');
$user_email = $request->input('user_email');
$uid = $request->input('uid');
$stock = $request->input('stock');
$rtime = $now;
$s = $request->input('s');

        $obj = borrow::where('id','=',$id)->where('user_email','=',$user_email)->first();
           
             $obj->user_email = $user_email;
        $obj->uid = $uid;
        $obj->stock = $stock;
        $obj->rtime = $rtime;
         $obj->s = $s;

            if ($obj->save()) {

                DB::table('libraries as l')
   ->join('borrows as b', 'l.id', '=', 'b.id')
   ->update([ 'l.stock' => DB::raw("`b`.`stock`") ]);

                //echo "Success";

            return redirect('user/return')->with('message', 'Returned a book!');
            }}
// elseif ($obj){

//              return redirect('user/return')->with('msg', 'U wanted to return a wrong book!');}
//     }

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

     public function bbooklist(){
            $data = borrow::all();
            return view('admin/borrowlist',['borrows'=>$data]);
        }

          public function deletebl($id)
    {
        DB::table('borrows')->where('id',$id)->delete();
        return redirect('admin/borrowlist')->with('message', 'You deleted a record!');
    }

 public function uob()
    {
       $data = borrow::all();
            return view('user/uob',['borrows'=>$data]);
    }

     public function updateborrowl(Request $request, $id)
    {
      
       
 



$s = $request->input('s');

        $obj = borrow::find($id);
           
            
         $obj->s = $s;

            if ($obj->save()) {

               

               

            return redirect('admin/borrowlist')->with('message', 'you updated!');
            }

}
}
