<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResultsController extends Controller
{
    public function index(){
        //Results page
        return view('results.index');
    }

    public function calc( Request $request){

        //Validating inputs
        $this->validate($request, [
            'plastic_type' => 'required',
            'plastic_weight' => 'required|integer|min:0.1'
        ]);

        //Getting values from database
        $plastic_type = DB::table('plastic_types')->where('acronym', $request->plastic_type)->first();
        $tshirt_part = $request->plastic_weight*20;
        //Passing data to the view
        return view('results.index', [
            'rec_grade'=>$plastic_type->recycle_grade,
            'rec_data'=>$plastic_type->recycle_data,
            'plastic_type'=>$plastic_type->type,
            'acronym'=>$plastic_type->acronym,
            'tshirt_part'=>$tshirt_part
        ]);
}
}