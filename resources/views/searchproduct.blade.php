@extends('layouts.app')
@section('content')

 
    <div class="clear"></div>
    <div class="top64 mobile-tablet_show"></div>
    <section>
        <div class="content"> <!-- content -->
            <!--<div class="title bgorange">Products</div>
            <div class="linetitleorange"></div>
            <div class="clear"></div>-->
            <div class="clear"></div>
            

            @include('layouts.sidebar')

            

             <div class="col_product">
                @foreach($products  as $items)
                  @if($items->status==1)
                <div class="product-inner2 line-content">
                    <div class="product_img"><a href=" {{route('productsdetails',['id'=>$items->id])}}"><img src="{{asset($items->image?$items->image:'')}}" border="0" width="100%" class=""></a></div>
                    <div class="product_heading">{{$items->title?$items->title:''}}</div>
                    <div class="product_priceonsale">Price : <span class="orange"> $ : {{$items->price}}</span></div>
                   
                   <a type="button" href="#" class="btn btn-info passingID" style="background:#3f808a;width: 100%; " data-toggle="modal"  data-target="#myModal"   data-id="{{$items->id}}" data-title="{{$items->title}}" data-price="{{$items->price}}"  ><img src="{{asset('assets/images/template/icon_btncart.png')}}"   class="right15">Want To Buy</a>

                    <!--                        <a href="#dialogboxscart"  class="linkAddtoCart" name="81"><div class="product_btnaddtocart"><img src="images/template/icon_btncart.png" class="right15">Add to Cart</div></a>-->
                </div>
                @endif
                 @endforeach
            </div>
           


            </div>
           
            <div class="clear"></div>
            <div class="top45"></div>
             <div class="row">
                <div  class="col-md-4"></div>
                  <div class="col-sm-4">
            
                    <div class="row">
                        <div class="col-sm-3">
                           <ul class="next">next</ul>
                                </div>
                        <div class="col-sm-4">
                           <ul id="pagin"></ul>
                                    </div>
                        <div class="col-sm-3">
                            <ul class="last">last</ul>
                            </div>
                    </div>
                </div>
                        
         </div>
            </div>
        <div class="clear"></div>
    </section>

      <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <form action="{{route('sendmail')}}"  method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group" metho="post" style="display: none;" >
            <input  type="text" class="form-control" name="id" id="id" value="">    
            </div>
            <div class="form-group">
                <label>Product Qunatity </label>
            <input type="text" class="form-control" name="qty" id="qty" value="1">    
            </div>
            <div class="form-group">
                <label>Product Price</label>
            <input type="text" class="form-control" name="price" id="price" value="">    
            </div>
            <div class="form-group">
                <label>Total Price</label>
            <input type="text" class="form-control" name="total_price" id="total" value="">    
            </div>
            <!-- <div class="form-group">
                <label>Product Price</label>
            <input type="text" class="form-control" name="price" id="price" value="">    
            </div> -->
            <div class="form-group">
                <label>Your Full Name</label>
            <input type="text" class="form-control" name="name" id="name" value="">    
            </div>
            <div class="form-group">
                <label>Your Email</label>
            <input type="text" class="form-control" name="email" id="email" value="">    
            </div>
            <div class="form-group">
                <label>Your Phone</label>
            <input type="text" class="form-control" name="phone" id="phone" value="">    
            </div>
            <div class="form-group">
                <label>Your Address</label>
            <input type="text" class="form-control" name="address" id="address" value="">    
            </div>
            <div class="form-group">
                <label>Your Country</label>
            <input type="text" class="form-control" name="country" id="country" value="">    
            </div>
            <div class="form-group">
                <label>Description</label>
            <textarea type="text" class="form-control" name="message" id="message" ></textarea>    
            </div>
                <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit"  class="btn btn-primary">Send message</button>
        </div>
            </form>
        
        </div>
        
    

     
      </div>
      
    </div>
  </div>

    <div class="clear"></div>

 
    <div id="dialogboxscart">
        <div id="dialogboxscart-header">
            <a class="dialogboxs-modal_close" href="javascript:void(0)" style="float:right"><i class="fa fa-times pink"></i></a>
        </div>
        <div id="dialogboxscart-ct">
        </div>
    </div>    </div> <!-- end main -->
<style type="text/css">
  .current {
  color: green;
}

#pagin li {
  display: inline-block;
}
</style>

<script type="text/javascript">
 $(".passingID").click(function () {
    var ids = $(this).attr('data-id');
    var title = $(this).attr('data-title');
    var price = $(this).attr('data-price');

    $("#id").val( ids );
    $("#title").val( title );
    $("#price").val( price );
    $("#total").val( price );


    $('#myModal').modal('show');
});


</script>
<script type="text/javascript">
  //Pagination
  pageSize = 5;

  var pageCount =  $(".line-content").length / pageSize;
    
     for(var i = 0 ; i<pageCount;i++){
        
       $("#pagin").append('<li><a href="#">'+(i+1)+'</a></li> ');
     }
        $("#pagin li").first().find("a").addClass("current")
    showPage = function(page) {
      $(".line-content").hide();
      $(".line-content").each(function(n) {
          if (n >= pageSize * (page - 1) && n < pageSize * page)
              $(this).show();
      });        
  }
    
  showPage(1);

  $("#pagin li a").click(function() {
      $("#pagin li a").removeClass("current");
      $(this).addClass("current");
      showPage(parseInt($(this).text())) 
  });
</script>
<script type="text/javascript">
    $('#qty').on('keyup',function(){

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


   
