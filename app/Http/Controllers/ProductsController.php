<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use Illuminate\Support\Facades\Session;
class ProductsController extends Controller
{

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
    public function editproducts($id) {
        $products=Products::find($id);
        return view('admin.products.update',compact('products',$products));

    }
    public function updateproducts(Request $request){
        
        try{

             $path = null;
            if ($request->hasFile('image')) {
                dd('asdfasf');
                $size=$request->file('image')->getSize();
               
                $file = date('YmdHis'). '.'.$request->file('image')->getClientOriginalName();;     
            
                $path = $request->file('image')->move('assets/images', $file);
               $products['image']=$path?$path:'';


            }

                $products=[
                'title'=>$request->title,
                'price'=>$request->price,
                'status'=>$request->status,
                'type'=>$request->type,
                'category_id'=>$request->category_id,
                'desc'=>$request->description,
                ];
                    // dd($products);
            

           
            
            Products::where('id',$request->id)->update($products);

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
