<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use Illuminate\Support\Facades\Session;
class ProductsController extends Controller
{
    public function show(){
    	return view('admin.products.index');
    }
    public function showaddform(){
    return view('admin.products.addproduct');
    }
    public function showproducts(){
       $products=Products::all(); 
    return view('admin.products.index',compact('products',$products));
    }
    public function addproducts(Request $request){
    	
    	try{

			$path = null;
            if ($request->hasFile('image')) {
                
                $size=$request->file('image')->getSize();
               
                $file = date('YmdHis'). '.'.$request->file('image')->getClientOriginalName();;     
            
                $path = $request->file('image')->move('assets/images', $file);
                

            }

    			$products=[
    			'title'=>$request->title,
    			'image'=>$path?$path:'',
    			'price'=>$request->price,
    			'status'=>$request->status,
    			'type'=>$request->type,
    			'category_id'=>$request->category_id,
    			'desc'=>$request->description,

    				];
                    // dd($products);
    		
    		Products::create($products);

    	Session::flash('message','Record has been inseted Successfully');
    	Session::flash('result',true);
    		}
    	catch(\ Exception $e){
    	Session::flash('message',$e->getMessage());
    	Session::flash('result',true);

    		}
    			return back();

	}
     public function update(Request $request){
        
        try{

            $path = null;
            if ($request->hasFile('image')) {
                
                $size=$request->file('image')->getSize();
               
                $file = date('YmdHis'). '.'.$request->file('image')->getClientOriginalName();;     
            
                $path = $request->file('image')->move('assets/images', $file);
                

            }

                $products=[
                'title'=>$request->title,
                'image'=>$path?$path:'',
                'price'=>$request->price,
                'status'=>$request->status,
                'type'=>$request->type,
                'category_id'=>$request->category_id,
                'desc'=>$request->description,

                    ];
                    // dd($products);
            
            Products::create($products);

        Session::flash('message','Record has been inseted Successfully');
        Session::flash('result',true);
            }
        catch(\ Exception $e){
        Session::flash('message',$e->getMessage());
        Session::flash('result',true);

            }
                return back();

    }

}
