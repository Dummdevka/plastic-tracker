<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultsController extends Controller
{
    public function index(){
        return view('results.index');
    }

    public function calc( Request $request){
        dd($request->plastic_type, $request->plastic_weight);
    }
}
