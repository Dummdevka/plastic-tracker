<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Plastic_item;
use App\Models\Plastic_type;
use Illuminate\Http\Request;

class RecycledController extends Controller
{
    //Middleware
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index(){
        //Get all the plastic items of the user
        $items = auth()->user()->plastic_items;

        //Sum up only recycable plastic
        $sum = $items->whereIn('plastic_type_id', [1,2,3,4])->sum('weight');

        //Render the view
        return view('account.recycled', [
            'sum' => $sum,
            'items' => $items
        ]);
    }

    //Add plastic 
    public function add_recycled(Request $request)
    {
        //Parse plastic data
        $weight = $request->weight;

        //Get plastic id from its acronym
        $id = Plastic_type::where('acronym', $request->acronym)->get()->modelKeys();
        //Insert data

        auth()->user()->plastic_items()->create([
            'plastic_type' => $id,
            'mass' => $weight
        ]);
        // Plastic_item::create([
        //     'plastic_type_id' => $id,
        //     'weight' => $weight
        // ]);
        
    }
}

