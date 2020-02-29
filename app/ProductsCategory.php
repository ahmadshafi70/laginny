<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use App\Products;
class ProductsCategory extends Model
{
      protected $fillable=['title'];
   

 public function category(){
    return $this->belongsTo(Products::class,'category_id');
    }



    }

