<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChangePassword extends Controller
{
    function index(){
        $user = User::where('email',Session::get('email'))->first();
        return view('auth.changePassword', compact('password', $user->password));
    }
    function change(Request $r){
        $pw=$r->password;
        $cfpw=$r->password_confirmation;
        if($pw==$cfpw){
            $user=User::where('email',Session::get('email'))->first();
            $user->password=$pw;
            $user->save();
            return redirect()->route('homeIndex');
        } return back();
    }
}
