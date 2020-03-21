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
                    <h4 class="card-title">Update User</h4>  
                    <form class="forms-sample" action="{{route('admin.user.updateusers')}}" method="POST" enctype="multipart/form-data"> 
                      @csrf
                      <div class="form-group">

                        
                        <input type="text" name="id" style="display: none;" value="{{ $user->id}}" class="form-control" placeholder="Username">
                      </div>
                      <div class="form-group">

                        <label for="exampleInputUsername1">Name</label>
                        <input type="text" name="name" value="{{ $user->name}}" class="form-control" id="exampleInputUsername1" placeholder="Username">
                      </div>
                    
                 
                      <div class="form-group">
                        <label for="exampleInputUsername1">email</label>
                        <input type="text" name="email" value="{{ $user->email}} "class="form-control" placeholder="Product Price">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Password</label>
                        <input type="password" name="password" value="{{ $user->password}}" class="form-control" id="exampleInputUsername1" placeholder="Enter Your Password">
                      </div>
                      <div class="form-group">
                          <label for="exampleSelectGender">Status</label>
                          <select class="form-control" name="status" id="exampleSelectGender" >
                            <option value="1" {{$user->status==1?'selected' :''}}>Active</option>
                            <option value="0"{{$user->status==0?'selected' :''}} >Disabled</option>
                          </select>
                      </div>
                     <div class="form-group">
                          <label for="exampleSelectGender">Role</label>
                          <select class="form-control" name="role_id" id="exampleSelectGender" >
                          
                            <option value="1"{{$user->role_id==1?'selected':''}}>Admin</option>
                            <option value="2" {{$user->role_id==2?'selected':''}}>User</option>
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
