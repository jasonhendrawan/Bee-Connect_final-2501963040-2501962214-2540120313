<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLogin(){
        return view('auth.login');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

    protected function redirectTo(){
        if (Auth::user()->role_id == 2){
            return redirect('/discover');
        } else {
            return redirect('/dashboard');
        }
    }

    public function login(Request $request){
        $request->validate([
            'email'=> 'required|string',
            'password' => 'required|min:6|alpha_num'
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $valid = Auth::attempt($credentials, $request->remember);

        if(!$valid) {
            return redirect()->back()->withErrors("Wrong combination of Email and Password");
        }

        return $this->redirectTo();
    }
}
