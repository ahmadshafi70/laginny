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
      
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
              </li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-2">
                
              </div>
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Role</h4>  
                    <form class="forms-sample" action="{{route('admin.role.addrole')}}" method="POST" enctype="multipart/form-data"> 
                      @csrf
                      <div class="form-group">

                        
                        
                      <div class="form-group">

                        <label for="exampleInputUsername1">Title</label>
                        <input type="text" name="title"  class="form-control" id="exampleInputUsername1" placeholder="Title">
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
