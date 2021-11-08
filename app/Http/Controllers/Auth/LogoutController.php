<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function logout_user(){

        //Log the user out
        Auth::logout();

        //Redirect
        return redirect()->route('home');
    }
}
