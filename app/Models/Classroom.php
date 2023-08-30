<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

     protected $fillable=[
        'name','building_id'
    ];

    public function buildings(){
        return $this->belongsTo(Buildings::class);
    }


}
