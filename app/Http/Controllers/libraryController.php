<?php

namespace App\Http\Controllers;
use DB; 

use Illuminate\Http\Request;


use App\library;

class libraryController extends Controller
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
        return view('admin.booki');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeb(Request $request)
    {
        $this->validate($request,[
           'id' => 'required|unique:libraries,id',
           'ttl' => 'required',
           'author' => 'required',
           'category' => 'required',
           'edition' => 'required|integer',
           'price' => 'required|integer',
           'stock' => 'required'
        ]);
$id = $request->id;
$ttl = $request->ttl;
$author = $request->author;
$category = $request->category;
$edition = $request->edition;
$price = $request->price;
$stock = $request->stock;

        $obj =new library();
        $obj->id = $id;
        $obj->ttl = $ttl;
        $obj->author = $author;
        $obj->category = $category;
        $obj->edition = $edition;
        $obj->price = $price;
        $obj->stock = $stock;
        if($obj->save()){
        //echo 'Successfully Inserted';
        return redirect('admin/bookim')->with('message', 'Book added,you can add image also!');//->with('success','Data Added');
    }
    }

    // public function abooklist(){
    //         $data = library::all();
    //         return view('admin/abooklist',['libraries'=>$data]);
    //     }

          public function abooklist(){
            $data = DB::table('libraries')
            ->join('bookfiles', 'libraries.id', '=', 'bookfiles.id')
        ->select('libraries.*', 'bookfiles.name')
        ->get();
            return view('admin/abooklist',['libraries'=>$data]);
        }


    public function ubooklist(){
            $data = DB::table('libraries')
            ->join('bookfiles', 'libraries.id', '=', 'bookfiles.id')
        ->select('libraries.*', 'bookfiles.name')
        ->get();
            return view('user/ubooklist',['libraries'=>$data]);
        }

   public function books(){
            $data = DB::table('libraries')
            ->join('bookfiles', 'libraries.id', '=', 'bookfiles.id')
        ->select('libraries.*', 'bookfiles.name')
        ->get();
            return view('books',['libraries'=>$data]);
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
        $obj = library::find($id);
            return view('admin/editbl',['libraries'=>$obj]);
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

 $this->validate($request,[
           'id' => 'required',
           'ttl' => 'required',
           'author' => 'required',
           'category' => 'required',
           'edition' => 'required|integer',
           'price' => 'required|integer',
          // 'stock' => 'required'
        ]);
 $ttl = $request->ttl;
$author = $request->author;
$category = $request->category;
$edition = $request->edition;
$price = $request->price;
//$stock = $request->stock;

        $obj = library::find($id);
           
             $obj->ttl = $ttl;
        $obj->author = $author;
        $obj->category = $category;
        $obj->edition = $edition;
        $obj->price = $price;
       // $obj->stock = $stock;

            if ($obj->save()) {

            return redirect('admin/abooklist')->with('message', 'Books data updated!');
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

    public function delete($id)
    {
        DB::table('libraries')->where('id',$id)->delete();
        DB::table('bookfiles')->where('id',$id)->delete();
        return redirect('admin/abooklist')->with('message', 'Book deleted!');
    }
}
