@extends('admin.layouts.app')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  
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
                    <h4 class="card-title">Update Products Inquiry</h4>
                  
                    <form class="forms-sample" action="{{route('updateinquiry')}}" method="POST" enctype="multipart/form-data"> 
                      @csrf
                       <div class="form-group">

                        <input type="text" name="id" value="{{$inquiry->id}}" class="form-control" id="exampleInputUsername1" placeholder="Username" style="display: none;">
                      </div>
                     
                      <div class="form-group">

                        <label for="exampleInputUsername1">Product Title</label>
                        <input type="text" name="product_title" value="{{$inquiry->product_title}}" class="form-control" id="exampleInputUsername1" placeholder="Product Title">
                      </div>
                      <div class="form-group">

                        <label for="exampleInputUsername1">Product Quantity</label>
                        <input type="text" name="qty" value="{{$inquiry->qty}}" class="form-control" id="qty" placeholder="Product Quantity">
                      </div>
                        <div class="form-group">

                        <label for="exampleInputUsername1">Product Price</label>
                        <input type="text" name="product_price" value="{{$inquiry->product_price}}" class="form-control" id="price" placeholder="Product Price">
                      </div>
                      <div class="form-group">

                        <label for="exampleInputUsername1">Total Price</label>
                        <input type="text" name="total_price" value="{{$inquiry->total_price}}" class="form-control" id="total" placeholder="Total Price">
                      </div>
                        <div class="form-group">

                        <label for="exampleInputUsername1">Customer Name</label>
                        <input type="text" name="customer_name" value="{{$inquiry->customer_name}}" class="form-control" id="exampleInputUsername1" placeholder="Customer Name">
                      </div>
                        <div class="form-group">

                        <label for="exampleInputUsername1">Customer Email</label>
                        <input type="text" name="cutomer_email" value="{{$inquiry->cutomer_email}}" class="form-control" id="exampleInputUsername1" placeholder="Customer Email">
                      </div>
                        <div class="form-group">

                        <label for="exampleInputUsername1">Customer Country</label>
                        <input type="text" name="customer_country" value="{{$inquiry->customer_country}}" class="form-control" id="exampleInputUsername1" placeholder="Customer Country">
                      </div>
                        <div class="form-group">

                        <label for="exampleInputUsername1">Customer Phone</label>
                        <input type="text" name="customer_phone" value="{{$inquiry->customer_phone}}" class="form-control" id="exampleInputUsername1" placeholder="Customer Phone">
                      </div>
                        <div class="form-group">

                        <label for="exampleInputUsername1">Customer Address</label>
                        <input type="text" name="customer_address" value="{{$inquiry->customer_address}}" class="form-control" id="exampleInputUsername1" placeholder="Customer Address">
                      </div>
                        <div class="form-group">

                        
                        <textarea type="text" name="customer_message" class="form-control" id="exampleInputUsername1" placeholder="Customer Description" >{{$inquiry->customer_message}}</textarea> 
                      </div>
                       <div class="form-group">
                          <label for="exampleSelectGender">Status</label>
                          <select class="form-control" name="status" id="exampleSelectGender" >
                            <option value="1" {{$inquiry->status==1?'selected' :''}}>Pending</option>
                            <option value="0"{{$inquiry->status==0?'selected' :''}} >Aprove</option>
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
       
<script type="text/javascript">
$('#qty').on('keyup',function(){
      // alert('asfhasdjk');

 var qty = $('#qty').val();
 // alert(qty);      
 var price = $('#price').val();
var t= qty*price;
// alert(t);
 $('#total').val(t);

});
$('#price').on('keyup',function(){
 var qty = $('#qty').val();
 var price = $("#price").val();
var t= qty*price;
// alert(t);

 $('#total').val(t);
});
$('#btn').on('submit',function(){
 var qty = $('#qty').val();
 var price = $("#price").val();
var t= qty*price;
// alert(t);

 $('#total').val(t);
});
</script>
@endsection