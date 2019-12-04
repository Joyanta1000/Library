<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});



Route::get('books','libraryController@books');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
 // Route::get('admin/own', function () {
 //    return view('admin.own');});


Route::get('admin/areg', function () {
    return view('admin.areg');
});

Route::get('admin/alog', function () {
    return view('admin.alog');
});

Route::get('user/ulog', function () {
    return view('user.ulog');
});

Route::get('user/ureg', function () {
    return view('user.ureg');
});

Route::group(['middleware'=>'checkloggedin'],function(){
  Route::get('admin/own', function () {
      return view('admin.own');
 });
  Route::get('admin/editai', function () {
      return view('admin.editai');
 });

 Route::get('admin/chngaup', function () {
      return view('admin.chngaup');
 });

 Route::post('/updateapass','adminController@updateapass');

  Route::post('/updateai/{id}','adminController@updateai');
// Route::get('admin/own','adminController@index');
Route::get('admin/booki','libraryController@create');
Route::get('admin/abooklist','libraryController@abooklist');
Route::get('admin/editbl/{id}','libraryController@edit');
Route::post('/update/{id}','libraryController@update');
Route::get('/delete/{id}','libraryController@delete');
Route::post('storeb','libraryController@storeb');
// Route::get('admin/editai','adminController@edit');
Route::post('/logout','adminController@logout');

Route::get('admin/borrowlist','borrowController@bbooklist');

Route::get('/deletebl/{id}','borrowController@deletebl');

Route::get('admin/userlist','peopleController@ulist');
Route::get('/deleteul/{id}','peopleController@deleteul');
Route::post('/updateul/{id}','peopleController@updateul');
Route::post('/updateborrowl/{id}','borrowController@updateborrowl');
Route::get('admin/bookim','bookfileController@index');

Route::post('strim','bookfileController@strim');

Route::get('admin/bookfileup','bookfileController@indo');

Route::post('/updtim','bookfileController@updtim');

});

Route::group(['middleware'=>'chkloggedin'],function(){
Route::get('user/uown', function () {
    return view('user.uown');
});

 Route::get('user/editu', function () {
      return view('user.editu');
 });

 Route::get('user/chngup', function () {
      return view('user.chngup');
 });



 Route::post('/updatepass','peopleController@updatepass');

 Route::post('/updateu/{id}','peopleController@updateu');

Route::get('user/ubooklist','libraryController@ubooklist');

// Route::get('user/borrow', function () {
//     return view('user.borrow');
// });

Route::get('user/borrow','borrowController@create');

Route::post('/ulogout','peopleController@ulogout');

 Route::get('user/return', function () {
      return view('user.return');
});

      Route::post('/updatebb','borrowController@updatebb');

      Route::get('user/uob','borrowController@uob');

      
Route::get("user/uown",'fileController@showim');
Route::get('user/fileup','fileController@ind');

Route::post('/updateim/{id}','fileController@updateim');

});

Route::get('/forgotpass','ForgotPassword@forgot');
Route::post('/forgotpass','ForgotPassword@password');

Route::get('user/file','fileController@index');

Route::post('storeim','fileController@storeim');

Route::post('storebb','borrowController@storebb');

Route::get('user/ureg','peopleController@create');

Route::post('storeu','peopleController@storeu');


Route::get('admin/areg','adminController@create');

Route::post('store','adminController@store');

Route::post('alogin','adminController@alogin');
Route::post('ulogin','peopleController@ulogin');
 // Route::get('admin/own','adminController@alogin');

 // Route::get('admin/o','adminController@alogin');





