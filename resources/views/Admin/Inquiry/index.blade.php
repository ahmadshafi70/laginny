@extends('admin.layouts.app')
@section('content')

 <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Data table </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Data table</li>
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
                            <th>Product Title</th>
                            <th>Qunatity</th>
                            <th>Prodcut Price</th>
                            <th>Total Price</th>
                            <th>Customer Name</th>
                            <th>Customer Email</th>
                            <th>Customer Country</th>
                            <th>Customer Phone</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>

                          <?php $i=0 ?>
                          @foreach($inquiry as $row) 
                          <tr>

                            <td>{{$i=$i+1?$i=$i+1:''}}</td>
                            <td>{{$row->product_title}}</td>
                            <td>{{$row->qty}}</td>
                            <td>{{$row->product_price}}</td>
                            <td>{{$row->total_price}}</td>
                            <td>{{$row->customer_name}}</td>
                            <td>{{$row->cutomer_email}}</td>
                            <td>{{$row->customer_country}}</td>
                            <td>{{$row->customer_phone}}</td>
                            <td>
                           
                         
                              <a type="submit" href="{{ route('changestatus',['id'=>$row->id,'status'=>$row->status])}}" class=" btn btn-primary btn-md">{{$row->status==0?'pending':'aprove'}} </a>
                       
                             </td>
                            <td>{{$row->customer_message}}</td>
                           
                            <td>
                              <a href="{{ route('editinquiry',['id'=>$row->id])}}" class="btn btn-outline-primary">update</a>
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