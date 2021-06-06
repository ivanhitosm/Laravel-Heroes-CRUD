<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class superPoderes extends Model
{
    use HasFactory;

    public function heroe(){
        return $this->belongsTo('App\Models\heroes');
    }
}