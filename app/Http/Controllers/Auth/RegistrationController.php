<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    //Middleware
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    public function index(){
        return view('auth.registration');
    }
    public function store_user(Request $request){
        
        //Validate inputs
        $this->validate($request, [
            'username' => 'required|min:6|max:255|unique:users',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed|max:255'
        ]);
        //Send data to db
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        //Authorize the user
        Auth::attempt($request->only('email', 'password'));
        
        //Redirect
        return redirect()->route('home');
    }
}
