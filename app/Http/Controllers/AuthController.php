<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function authenticate( Request $request)
    {
        $login_data  = ['email'=>$request->email,
                        'password'=>$request->password];

         if(Auth::attempt($login_data)){

            return view('admin.dashboard');
         }

         return redirect()->back()->with('error','invalid email or password')->withInput();
    }

    public function logout()
    {
        if (Auth::check())
        {
           Auth::logout();
        }
        return redirect()->route('login');

    }

    public function register()
    {
       return view('admin.auth.regsiter');
    }
    public function no_register(Request $request)
    {


        $request->validate([

            'name'=>'required',
            'email'=>'required|string|unique:users',
            'username'=>'required|unique:users',
            'password'=>'required|confirmed',
            'image'=>'required',
           ]);
         $user = new User();
        $user->fullname = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $password = Hash::make($request->password);
        $user->password = $password;
        
        $user_image  =$request->file('image');
        $file_name = $user->fullname.time().'.'.$user_image->extension();
        $user_image->move('image_user',$file_name);
        $user->user_image = $file_name;
        $user->save();
        return redirect()->back()->with('success','The admin has been successfully Regsiter !');
    }
}
