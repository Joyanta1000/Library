<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\bookfile;
use Illuminate\Support\Facades\Input;


class bookfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.bookim");
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
    public function store(Request $request)
    {
        //
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

  public function strim(Request $request)
    {

         $this->validate($request,[
          
           'image' => 'required'
          
           
        ]);
      $user = new bookfile;
      $user->id=Input::get('id');
      $user->title=Input::get('name');
      if(Input::hasFile('image')){
        $file = Input::file('image');
        $file->move(public_path().'/',$file->getClientOriginalName());

        $user->name = $file->getClientOriginalName();
        $user->size = $file->getClientsize();
        $user->type = $file->getClientMimeType();
      }
$user->save();

        return redirect('admin/abooklist')->with('message', 'Book Added!');
    }





     public function showim()
    {
        $user=bookfile::all();
        return view('admin.uown', compact('user'));
    // return view('user/uown',['files'=>$user]);
    }



      public function indo()
    {
         return view("admin.bookfileup");
    }
    


      public function updtim(Request $request)
    {
        $this->validate($request,[
          
           'image' => 'required'
           
           
        ]);

        $id=Input::get('id');

         $user =  bookfile::find($id);
      $user->id=$id;
      $user->title=Input::get('name');
      if(Input::hasFile('image')){
        $file = Input::file('image');
        $file->move(public_path().'/',$file->getClientOriginalName());

        $user->name = $file->getClientOriginalName();
        $user->size = $file->getClientsize();
        $user->type = $file->getClientMimeType();
      }
$user->save();

        return redirect('admin/bookfileup')->with('message', 'Books images are successfully updated!');
 
    }




}
