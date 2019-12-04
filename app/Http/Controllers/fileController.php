<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\file;
use Illuminate\Support\Facades\Input;
class fileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("user.file");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeim(Request $request)
    {

         $this->validate($request,[
          
           'image' => 'required'
          
           
        ]);
      $user = new file;
     // $user->id=Input::get('id');
      $user->title=Input::get('name');
      if(Input::hasFile('image')){
        $file = Input::file('image');
        $file->move(public_path().'/',$file->getClientOriginalName());

        $user->name = $file->getClientOriginalName();
        $user->size = $file->getClientsize();
        $user->type = $file->getClientMimeType();
      }
$user->save();

        return redirect('user/ulog')->with('message', 'You registered,now you can login!');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    public function showim()
    {
        $user=file::all();
        return view('user.uown', compact('user'));
    // return view('user/uown',['files'=>$user]);
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

    public function ind()
    {
         return view("user.fileup");
    }

      public function updateim(Request $request, $id)
    {
        $this->validate($request,[
          
           'image' => 'required'
           
           
        ]);

         $user =  file::find($id);
     // $user->id=Input::get('id');
      $user->title=Input::get('name');
      if(Input::hasFile('image')){
        $file = Input::file('image');
        $file->move(public_path().'/',$file->getClientOriginalName());

        $user->name = $file->getClientOriginalName();
        $user->size = $file->getClientsize();
        $user->type = $file->getClientMimeType();
      }
$user->save();

        return view('user.ulog');
 
    }



    



}
