<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  $users = User::orderBy('created_at','desc')->paginate(10);
        return view('admin.users.listuser',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.adduser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        return redirect()->route('user.index')->with('success','The admin has been successfully added !');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( User $user)
    {
        return view('admin.users.updateuser',compact('user'));

    }
    public function editpass( User $user)
    {
        return view('admin.users.updatepassword',compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user)
    {     $request->validate([
        'name'=>'required',
        'email'=>'required|string|unique:users',
        'username'=>'required|unique:users',


       ]);
        $user->fullname = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->save();
        return redirect()->route('user.index')->with('success','The admin has been successfully Updated !');;

    }

    public function updatepass(Request $request,User $user)
    {

        $user->password = $request->password;
        $user->save();
        return redirect()->route('user.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
       $user->delete();

       return redirect()->route('user.index')->with('success','The admin has been successfully deleted !');
    }
}
