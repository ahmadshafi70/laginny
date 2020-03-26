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
                    <h4 class="card-title">Update Products </h4>  
                    <form class="forms-sample" action="{{route('admin.products.updateproducts')}}" method="POST" enctype="multipart/form-data"> 
                      @csrf
                      <div class="form-group">

                        
                        <input type="text" name="id" style="display: none:" value="{{ $products->id}}" class="form-control" placeholder="Username">
                      </div>
                      <div class="form-group">

                        <label for="exampleInputUsername1">Title</label>
                        <input type="text" name="title" value="{{ $products->title}}" class="form-control" id="exampleInputUsername1" placeholder="Username">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Drop Your Product Image Here</label>
                        <input type="file" name="image"  class="dropify" />
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Category</label>
                        <select class="form-control" name="category_id" id="exampleSelectGender" >
                          @foreach(App\ProductsCategory::all() as $cat )
                          <option value="{{$cat->id}}" {{$products->category_id==$cat->id?'selected':''}}>{{$cat->title}}</option>
                           @endforeach
                          
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Price</label>
                        <input type="text" name="price" value="{{ $products->price}} "class="form-control" placeholder="Product Price">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Code</label>
                        <input type="text" name="code" value="{{ $products->code}}" class="form-control" id="exampleInputUsername1" placeholder="Product Code">
                      </div>
                      <div class="form-group">
                          <label for="exampleSelectGender">Status</label>
                          <select class="form-control" name="status" id="exampleSelectGender" >
                            <option value="1" {{$products->status==1?'selected' :''}}>Active</option>
                            <option value="0"{{$products->status==0?'selected' :''}} >Disabled</option>
                          </select>
                      </div>
                     <div class="form-group">
                          <label for="exampleSelectGender">Type</label>
                          <select class="form-control" name="type" id="exampleSelectGender" >
                          
                            <option value="1"{{$products->type==1?'selected':''}}>Featured</option>
                            <option value="2" {{$products->type==2?'selected':''}}>Recommended</option>\
                            <option value="3" {{$products->type==3?'selected':''}}>Other</option>
                          </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Description</label>
                        <textarea type="text" name="description" class="form-control" id="exampleInputUsername1" placeholder="Username">{{ $products->desc}}
                        </textarea>

                      </div>


                     
                    
                      <button type="submit" class="btn btn-primary mr-2">Upate Products</button>
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