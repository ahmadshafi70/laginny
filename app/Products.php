<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\ProductsCategory;
class Products extends Model
{
    protected $fillable=['title','image','price','status','type','category_id','desc'];


    public function category(){
    return	$this->belongsTo(ProductsCategory::class,'category_id');
    } 

}
