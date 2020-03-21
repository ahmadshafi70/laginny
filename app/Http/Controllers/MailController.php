<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mail\SendMail;
use Mail;
use App\Inquiry;
use Illuminate\Support\Facades\Session;
class MailController extends Controller
{
    public function sendmail(Request $request){
    try{
     $data=[
            'product_id'=>$request->id,
            'product_title'=>$request->product_title,
            'product_price'=>$request->price,
            'customer_name'=>$request->name,
            'cutomer_email'=>$request->email,
            'customer_phone'=>$request->phone,
            'customer_address'=>$request->address,
            'customer_country'=>$request->country,
            'customer_message'=>$request->message,
            'status'=>0,
            'qty'=>$request->qty,
            'total_price'=>$request->total_price,
        ];

        
        Inquiry::create($data);

        // Mail::to('ahmadshafi@gmail.com')->send(new SendMail($request));

        Session::flash('message','Your Quote Has Been Submited Successfully !');
        Session::flash('result',true);
    }
    catch(\Exception $e){

        Session::flash('message','Sorry Something Might Wrong With ..!! Please Try Again');
        
        Session::flash('result',true);

    }
  

    return back();
    }

}
