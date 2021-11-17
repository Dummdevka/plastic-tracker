<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Plastic_type;
use App\Models\User;

class Plastic_item extends Model
{
    use HasFactory;

    protected $fillable = [
        'plastic_type_id',
        'weight',
    ];

    //Defining dependency [Plastic type]
    public function plastic_type(){
        return $this->belongsTo(Plastic_type::class);
    }
}
