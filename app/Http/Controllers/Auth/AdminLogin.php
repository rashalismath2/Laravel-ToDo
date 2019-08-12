<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ValidateLogin;

class AdminLogin extends Controller
{
    public function __construct(){
        $this->middleware('guest:admin',['except'=>['logout']]);
    }
  
    public function index(){

        return view('auth/adminlogin');
    }
    public function login(ValidateLogin $request){

        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('adminhome')->with('status','Admin logged in');
        }
        return redirect()->route('adminlogin.show');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('adminlogin.show')->with('status','Logged out');
    }
}
