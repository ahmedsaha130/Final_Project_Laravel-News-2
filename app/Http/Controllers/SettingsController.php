<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.updatepassword');
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
    public function edit( User $user)
    {
        $users = User::find(Auth::user()->id);

        return view('admin.users.updatepassword',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $users)
    {

        $this->validate($request, [

            'oldpassword' => 'required',
            'password'=>'required|confirmed',

            // 'password_confirmation' => 'required',
            ]);



        $hashedPassword = Auth::user()->password;
        //    $hashedPassword = $users->password;

           if (Hash::check($request->oldpassword , $hashedPassword )) {

             if (!Hash::check($request->password , $hashedPassword)) {

                  $users =User::find(Auth::user()->id);
                  $users->password = bcrypt($request->password);
                  User::where( 'id' , Auth::user()->id)->update( array( 'password' =>  $users->password));

                //   session()->flash('message','password updated successfully');
                   return redirect()->back()->with('success','password updated successfully');
                // dd('Yes Pass is Update '.$request);
                }

                else{
                    //   session()->flash('message','new password can not be the old password!');
                    return redirect()->back()->with('error','new password can not be the old password!');
                                  // dd('No Pass is Update '.$request);
                    }

               }

              else{
                //    session()->flash('message','old password doesnt matched ');
                //    return redirect()->back();
                return redirect()->back()->with('error','old password doesnt matched');

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
}

