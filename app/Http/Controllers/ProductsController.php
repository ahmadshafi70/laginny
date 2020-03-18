<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use Illuminate\Support\Facades\Session;
use Image;
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
        //    $request->validate([
        //         'title'=>'bail|required|unique:posts|max:255',
        //         'price'=>'required',
        //         'code'=>'required',
        //         'status'=>'required',
        //         'type'=>'required',
        //         'category_id'=>'required',
        //         'desc'=>'required',
        
        // ]);
    	// dd($request);
    	try{

			$path = null;
            if ($request->hasFile('image')) {
                
                $size=$request->file('image');
                // dd($size);
                $thumbnailimage=Image::make($size);
                // dd($thumbnailimage);
                // $file = date('YmdHis'). '.'.$request->file('image')->getClientOriginalName();;     
              $save_name =date('YmdHis'). '.'.$request->file('image')->getClientOriginalExtension();
                // $path = $request->file('image')->move('assets/images', $file);
                $thumbnailimage->resize(300,300);
                // dd($thumbnailimage);
                $thumbnailimage->save('assets/thumbnails'.'/'. $save_name);
                // dd('ok');
                $thumbnailimage->save('assets/thumbnails'.'/'. $save_name);
                // $path=$request->file('image')->save('assets/thumbnails'.date('YmdHis'). '.'.$thumbnailimage->getClientOriginalName());  
                $path=$request->file('image')->move('assets/images', $save_name);
                // dd($path);  
                $path2=str_replace('images', 'thumbnails', $path); 
                // dd($path2);

            }

    			$products=[
    			'title'=>$request->title,
    			'image'=>$path2?$path2:'',
    			'price'=>$request->price,
                'code'=>$request->code,
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
        
        // $request->validate([
        //         'title'=>'required',
        //         'price'=>'required',
        //         'code'=>'required',
        //         'status'=>'required',
        //         'type'=>'required',
        //         'category_id'=>'required',
        //         'desc'=>'required',
        
        // ]);
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
                'code'=>$request->code,
                'status'=>$request->status,
                'type'=>$request->type,
                'category_id'=>$request->category_id,
                'desc'=>$request->description,
                ];
                    // dd($products);
                    
            if ($request->input('image')) {
                $name = time() . '.' . $request['image']->getClientOriginalExtension();
                $request['image']->move('assets/images', $name);
                $products['image'] = 'assets/images' . $name;
            }

           
            
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
