<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    public function Many(){
        return $this->hasMany(post::class,'cat_id','id');
    }
    use HasFactory;
}
