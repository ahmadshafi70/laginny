<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inquiry;
class InquiryController extends Controller
{
    public function index(){
    	$inquiry=Inquiry::all();

    	return view('admin.Inquiry.index',compact('inquiry',$inquiry));
    }
    public function changestatus($id,$status)
    {
    	if($status==1){
			$data=[
			'status'=>0,	
			];    	
    		$user = Inquiry::where('id',$id)->update($data);
        
    	}
    	else
    	{
    	$data=[
			'status'=>1,	
			];    	
    		$user = Inquiry::where('id',$id)->update($data);	
    		
    	}
        
  
        return back();
    }
	public function editinquiry($id){
    	$inquiry=Inquiry::find($id);

    	return view('admin.Inquiry.update',compact('inquiry',$inquiry));


    }
    public function updateinquiry( Request $request ){
    	 	// dd($request);
            $data=[
    		'product_id'=>$request->id,
    		'product_title'=>$request->product_title,
    		'product_price'=>$request->product_price,
    		'customer_name'=>$request->customer_name,
    		'cutomer_email'=>$request->cutomer_email,
    		'customer_phone'=>$request->customer_phone,
    		'customer_address'=>$request->customer_address,
    		'customer_country'=>$request->customer_country,
    		'customer_message'=>$request->customer_message,
            'status'=>$request->status,
            'qty'=>$request->qty,
            'total_price'=>$request->total_price,
	];

	 Inquiry::where('id',$request->id)->update($data);
   
return back();
    }
    
}
