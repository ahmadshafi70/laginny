<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mail\SendMail;
use Mail;
use App\Inquiry;
class MailController extends Controller
{
    public function sendmail(Request $request){
    
    	$data=[
    		'product_id'=>$request->id,
    		'product_title'=>$request->title,
    		'product_price'=>$request->price,
    		'customer_name'=>$request->name,
    		'cutomer_email'=>$request->email,
    		'customer_phone'=>$request->phone,
    		'customer_address'=>$request->address,
    		'customer_country'=>$request->country,
    		'customer_message'=>$request->message,
	];

		Inquiry::create($data);

    	Mail::to('ahmadshafi@gmail.com')->send(new SendMail($request));

return back();
    }

}
