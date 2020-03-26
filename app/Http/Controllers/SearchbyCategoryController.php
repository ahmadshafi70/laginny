<?php

namespace App\Http\Controllers;
use App\Products;
use Illuminate\Http\Request;
use App\ProductsCategory;
class SearchbyCategoryController extends Controller
{
public function searchbycategory($id){
$products=Products::where('category_id',$id)->get();
// dd($products);
return view('searchproduct',compact('products',$products));

}
  
}
