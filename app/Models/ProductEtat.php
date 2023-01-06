<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductEtat extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function product(){
        return $this->belongsTo(Product::class,'product_id','id');
    }

     public function entity(){
        return $this->belongsTo(Entity::class,'entity_id','id');
    }

     public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

}
