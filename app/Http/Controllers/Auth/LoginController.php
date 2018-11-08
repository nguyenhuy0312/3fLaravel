<?php

namespace App\Http\Controllers\Auth;
use Session;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    function login(){
        return view('auth.login');
    }
    function postLogin(Request $request){
       
        $email = $request->email;
		$password = $request->password;
		// $remember = $request->remember ? $request->remember : 0;
		// $obj = [
		// 	'email' => $email,
		// 	'password' => $password
		// ];
		// // Auth nó hỗ trợ cho việc xác thực người dùng của laravel
		// //Redirect là chuyển hướng tới route
		// if(Auth::attempt([
        //     'email' => $email,
		// 	'password' => $password
        // ])){
		// 	return redirect()->route('homeIndex');
		// }else
        // return back();
        $user=User::where('email', $email)->first();

        if($user->password==$password) {
           
        
            session(['user' => $user->name]);
            session(['email' => $user->email]);

            return redirect()->route('homeIndex');

        }
        return back();
    }
        public function Logined(){
            return view('auth.home');
        }
    
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
