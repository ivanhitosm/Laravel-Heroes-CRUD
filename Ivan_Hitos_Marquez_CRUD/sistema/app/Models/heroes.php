<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class heroes extends Model
{
    use HasFactory;

    public function superPoderes(){
        return $this->hasMany('App\Models\superPoderes');
    }
}
