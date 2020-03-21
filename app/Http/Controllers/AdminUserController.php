<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\user;
use DB;
class AdminUserController extends Controller
{
    public function showusers(){
   $user=User::all();
	return view('admin.user.index',compact('user',$user)) ;  	
    }
    public function showadduserform(){
   
	return view('admin.user.adduser') ;  	
    }
    public function addusers(Request $request){
    	// dd($request);
        try{
		$data=[
    		'name'=>$request->name,
    		'email'=>$request->email,
    		'password'=>Hash::make('$request->password'),
    		'role_id'=>$request->role_id,
    		'status'=>$request->status,

    	];
    	User::create($data);	
    	Session::flash('message','Record Add Successfully');
    	Session::flash('result',true);
    	}
    	catch (\ Exception $e){

    	Session::flash('message',$e->getMessage());
    	Session::flash('result',true);
    	}
        return back();
    	

    }
    public function editusers($id){
    	// dd('ok');
    	$user=User::find($id);

    return view('admin.user.update',compact('user',$user)) ;	
    }

    public function updateusers(Request $request){
    	try{
		$data=[
    		'name'=>$request->name,
    		'email'=>$request->email,
    		'password'=>Hash::make('$request->password'),
    		'role_id'=>$request->$role_id,
    		'status'=>$request->$status,

    	];
    	User::where('id',$request->id)->update();	
    	Session::flash('message','Record Updated Successfully');
    	Session::flash('result',true);
    	}
    	catch (\ Exception $e){

    	Session::flash('message',$e->getMessage());
    	Session::flash('result',true);
    	}
    	

    }

}
