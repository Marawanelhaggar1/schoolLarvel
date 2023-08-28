<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    use HasFactory;


     protected $fillable=[
        'first_name','last_name','subject',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function classroom(){
        return $this->belongsToMany(Classroom::class);
    }
}
