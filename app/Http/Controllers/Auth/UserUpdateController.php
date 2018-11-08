<?php

namespace App\Http\Controllers\Auth;
use App\User;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserUpdateController extends Controller
{
    function getUpdate(){
        $user=User::where('email',Session::get('email'))->first();
        return view('auth.userUpdate', compact('user'));
    }
    function postUpdate(Request $r){
    
        $user = User::where('email',Session::get('email'))->first();
        session(['user' => $r->name]);
        session(['email' => $r->email]);
        if($r->avatar!= NULL){
        $path= $r->file('avatar')->store('upload');
         $user->avatar=$path;
        }
        $user->fill($r->all());
        $user->save();
        return redirect()->route('homeIndex');
    }
}
