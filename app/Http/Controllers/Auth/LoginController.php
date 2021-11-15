<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //Middleware
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index(){
        return view('auth.login');
    }

    public function log_user(Request $request){

        //Validate
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //Sign in
        if(!Auth::attempt($request->only('email', 'password'), $request->remember)){
            return back()->with('status', 'Invalid login details');
        }

        //Redirect
        return redirect()->route('home');
    }
}
