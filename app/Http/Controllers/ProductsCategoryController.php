<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\ProductsCategory;
class ProductsCategoryController extends Controller
{
    public function index () {
    	$category=ProductsCategory::all();
    	return view('admin.ProductsCategory.index',compact('category',$category));
    }

    public function showprocatform () {

    	return view('admin.ProductsCategory.AddProCat');
    }
    public function addprocat (Request $request) {
    	try {
 		$category=[
 			'title'=>$request->title,
 		];  
		ProductsCategory::create($category);
    	Session::flash('message','Category has been Inserted Successfully');
    	Session::flash('result',true); 	
    	} 
    	catch (Exception $e) {

    	Session::flash('message',$e->getMessage());
    	Session::flash('result',true);	
    	}
    	return back();
    } 
    public function editprocat($id){
    	$category=ProductsCategory::find($id);
    	return view('admin.ProductsCategory.update',compact('category',$category));
    }
    public function updateprocat(Request $request){
    	try{
    		$data=[
    		'title'=>$request->title,
    	];
    	ProductsCategory::where('id',$request->id)->update($data);
    	Session::flash('message','Updated Successfully');
    	Session::flash('result',true);
    	}
    	catch(Exception $e){
    	Session::flash('message',$e->getMessage());
    	Session::flash('result',true);	


    	}

    	 return back();

    }
   
}

