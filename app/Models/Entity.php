<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function type(){
        return $this->belongsTo(SecteurType::class,'type','type');
    }

    public function secteur(){
        return $this->belongsTo(SecteurType::class,'secteur','secteur');
    }

}
