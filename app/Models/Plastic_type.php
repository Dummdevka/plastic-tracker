<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Plastic_item;

class Plastic_type extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    //Params
    protected $fillable = [
        'type',
        'recycle_grade',
        'recycle_data',
        'acronym'
    ];

    //Defining dependency [Plastic items]
    public function plastic_items(){
        $this->hasMany(Plastic_item::class);
    }
}
