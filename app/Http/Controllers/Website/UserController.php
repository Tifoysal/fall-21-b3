<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userRegistration(Request $request){
        // dd($request->all());
        User::create([
            'name'=>$request->username,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'password'=>bcrypt( $request->password),
        ]);
        return redirect()->back()->with('batch','Registration Successful');
    }
    public function userlogin(Request $request){
        // dd($request->all()); 
        $userpost = $request->except('_token');
        if (Auth::attempt($userpost)) {
            return redirect()->back();
        }
        else
        return redirect()->back()->with('batch','email or password not matched');


    }
    public function userLogout(){
        Auth::logout();
        return redirect()->back()->with('batch','User Logout');
    }
}
