@extends('admin.layouts.app')
@section('content')
         
          <div class="content-wrapper">
            <div class="page-header">
              @if(Session::has('message'))
                  @if(Session::get('result'))
                  <div class="alert alert-success">
                    {{Session::get('message')}}
                  </div>
                   @else
                   <div class="alert aler-danger">
                     {{Session::get('message')}}
                   </div>     
                  @endif
              @endif
              <h3 class="page-title"> Form elements </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-2">
                
              </div>
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add User</h4>  
                    <form class="forms-sample" action="{{route('admin.user.addusers')}}" method="POST" enctype="multipart/form-data"> 
                      @csrf
                      <div class="form-group">

                        
                        
                      <div class="form-group">

                        <label for="exampleInputUsername1">Name</label>
                        <input type="text" name="name"  class="form-control" id="exampleInputUsername1" placeholder="Username">
                      </div>
                    
                 
                      <div class="form-group">
                        <label for="exampleInputUsername1">email</label>
                        <input type="text" name="email" class="form-control" placeholder="Product Price">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Password</label>
                        <input type="password" name="password"  class="form-control" id="exampleInputUsername1" placeholder="Enter Your Password">
                      </div>
                      <div class="form-group">
                          <label for="exampleSelectGender">Status</label>
                          <select class="form-control" name="status" id="exampleSelectGender" >
                            <option value="1" >Active</option>
                            <option value="0" >Disabled</option>
                          </select>
                      </div>
                     <div class="form-group">
                          <label for="exampleSelectGender">Role</label>
                          <select class="form-control" name="role_id" id="exampleSelectGender" >
                          
                            <option value="1">Admin</option>
                            <option value="2">User</option>
                           </select> 
                      </div> 
                       
                                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                      
                     
                    </form>

                  </div>
                </div>
              </div>
              <div class="col-md-2">
                
              </div>
             
            
            
            </div>
          </div>
       
    
@endsection
