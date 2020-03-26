<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class HomeProductController extends Controller
{
 
public function index () {

return view('welcome');
}
public function productsdetails($id) {
$product=Products::where('id',$id)->first();
return view('productdetails',compact('product',$product));

}
public function contactus(){
return view('contactus');
}
public function aboutus(){
	return view('aboutus');
}
public function reviewvideo(){
	return view('reviewvideo');
}
public function products(){
	return view('products');
}



}
