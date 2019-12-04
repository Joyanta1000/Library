<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailer;
use Illuminate\Contracts\View\Factory;
use Sentinel;
use Reminder;
use App\people;
use DB;

class ForgotPassword extends Controller
{
    public function forgot(){
return view ('Security.forgot');
    }
    public function password(Request $request){
        $email = $request->user_email;
         $random_password = str_random(8);

    people::where(['user_email'=>$email])->update(['password'=> $random_password]);

$user = DB::table('people')->first();

    $email = $user->user_email;
    $user_name = $user->user_name;
    $password = $user->password;


    $view = [
    	'user_email'=>$email,
    	'user_name'=>$user_name,
        'password'=>$password ,
    ];

 $u = Mail::send('Security.forgot',$view, function($message) use ($email){
     $message->to($email)->subject('Changed');
});

//Mail::to($email)->send(new Mailable($view));
    return redirect()->back()->with('success','Please check your mail box!'); 
}

}
