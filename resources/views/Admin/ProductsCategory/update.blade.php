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
              
            </div>
            <div class="row">
              <div class="col-md-2">
                
              </div>
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Update Products Category Title</h4>
                  
                    <form class="forms-sample" action="{{route('updateprocat')}}" method="POST" enctype="multipart/form-data"> 
                      @csrf
                       <div class="form-group">

                        <input type="text" name="id" value="{{$category->id}}" class="form-control" id="exampleInputUsername1" placeholder="Username" style="display: none;">
                      </div>
                      <div class="form-group">

                        <label for="exampleInputUsername1">Title</label>
                        <input type="text" name="title" value="{{$category->title}}" class="form-control" id="exampleInputUsername1" placeholder="Username">
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