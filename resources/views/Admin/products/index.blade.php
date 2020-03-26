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
              <h3 class="page-title">All Products </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
              </nav>
            </div>
            <div class="page-header">
             
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
          
                </ol>
              </nav>
            </div>
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Data table</h4>
                <div class="row" > 
                  <div class="col-md-10">
                       
                  </div>
                  <div class="col-md-2">
                    <a href="{{ route('showproductsform')}}" class="btn btn-outline-primary">Add Product</a>
                    
                  </div>
                    
                  <br>
                  <br>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="table-responsive">
                      <table id="order-listing" class="table">
                        <thead>
                          <tr>
                            <th>Order #</th>
                            <th>title</th>
                            <th>Category</th>
                            <th>image</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Price</th>
                            <th>Code</th>
                            <th>Description</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>

                          <?php $i=0 ?>
                          @foreach($products as $row) 
                          <tr>

                            <td>{{$i=$i+1?$i=$i+1:''}}</td>
                            <td>{{$row->title}}</td>
                            <td>{{$row->category->title?$row->category->title:''}}</td>
                            <td><img style="width: 80px; height: 80px;" src="{{asset($row->image?$row->image:'')}}"></td>
                            <td><label class="badge 
                            @if($row->type==1)
                              badge-info 
                            @elseif($row->type==2)
                              badge-primary
                            @elseif($row->type==3)
                              badge-danger
                            @endif">
                            @if($row->type==1)
                              Featured
                            @elseif($row->type==2)
                              Recommended
                            @elseif($row->type==3)
                              Other 
                            @endif

                            </label></td>
                            <td><label class="badge {{ $row->status==1?'badge-info':'badge-primary' }}" >{{ $row->status==1?'active':'disable' }}</label></td>
                            <td>{{$row->price}}</td>
                            <td>{{$row->code}}</td>
                            <td>{{$row->desc}}</td>
                           
                            <td>
                              <a href="{{ route('editproducts',['id'=>$row->id])}}" class="btn btn-outline-primary">update</a>
                              <a href="{{ route('deleteproducts',['id'=>$row->id])}}" class="btn btn-outline-primary">delete</a>
                            </td>
                          </tr>
                          @endforeach
                      
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
   
@endsection 