<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ForgetPassController extends Controller
{
    public function show()
    {
        return view('frontsite.frogetpass');
    }

    public function updatepass( Request $request , User $user)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|confirmed',




           ]);

            $user_email = User::where('email',$request->email)->get()->first();


         if($user_email){

       $password_update = Hash::make($request->password) ;

       $pass = User::where('email', $request->email)->update(array('password' => $password_update )) ;

       return redirect()->route('login')->with('success',' Password is Updated ')->withInput();



         }else{

            return redirect()->back()->with('error',' E-mail Is Not Found ! ')->withInput();


         }

        //  return redirect()->back()->with('error',' mail ')->withInput();
    }
}
