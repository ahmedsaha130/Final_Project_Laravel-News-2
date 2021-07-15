<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin.users.updatepassword');
    }
    public function store(Request $request)
    {
        $request->validate([
            'oldpassword' => ['required', new MatchOldPassword],
            'newpassword' => ['required'],
            'password_confirmation' => ['same:newpassword'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->newpassword)]);

        dd('Password change successfully.');

    }
}
