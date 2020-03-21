<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Role;
class UserRoleController extends Controller
{
    public function showrole(){
   $role=Role::all();
	return view('admin.role.index',compact('role',$role)) ;  	
    }
    public function showaddroleform(){
   
	return view('admin.role.addrole') ;  	
    }
    public function addrole(Request $request){
    	// dd($request);
        try{
		$data=[
    		'title'=>$request->title,
    		

    	];
    	Role::create($data);	
    	Session::flash('message','Record Add Successfully');
    	Session::flash('result',true);
    	}
    	catch (\ Exception $e){

    	Session::flash('message',$e->getMessage());
    	Session::flash('result',true);
    	}
        return back();
    	

    }
    public function editrole($id){
    	// dd('ok');
    	$role=Role::find($id);

    return view('admin.role.update',compact('role',$role)) ;	
    }

    public function updaterole(Request $request){
    	// dd($request);
    	try{
		$data=[
    		'title'=>$request->title,
		];
		// dd($data);
    	Role::where('id',$request->id)->update($data);	
    	Session::flash('message','Record Updated Successfully');
    	Session::flash('result',true);
    	}
    	catch (\ Exception $e){

    	Session::flash('message',$e->getMessage());
    	Session::flash('result',true);
    	}
    	
    	return back();
    }
}
