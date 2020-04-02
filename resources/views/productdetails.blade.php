@extends('layouts.app')
@section('content')
<section>
	
	<div class="content">
		<div class="clear"></div>
		<div class="content top40 lineheight25">
			<div class="product_imgdetail">
				<div class="targetarea diffheight">
				<img src="{{asset($product->image?$product->image:'')}}" border="0" width="100%" id="multizoom" name="imgB" style="visibility: visible; opacity: 1;">                    </div>
				<div class="product_share">
					<div class="center" align="center">
						<div class="center" style="padding-bottom:10px;">
							<div class="addthis_toolbox addthis_default_style addthis_20x20_style fleft" addthis:url="#" addthis:title="{{$product->title}}" addthis:description="{{$product->desc}}">
								<a class="addthis_button_facebook" url="#"></a>
								<a class="addthis_button_twitter"></a>
								<a class="addthis_button_google_plusone_share"></a>
								<a class="addthis_button_email"></a>
							</div>
						</div>
					</div>
				
				</div>
				<div class="clear"></div>
			</div>
			<div class="product_detail">
				<div class="product_heading">{{$product->title}}</div>
				
				<div class="addtocart">
					<div style="text-align:left;"><span class="add_heading">Code :</span>{{$product->code?$product->code:'-'}}</div>
					<div class="clear"></div>
					<div style="text-align:left;"><span class="add_heading">Price&nbsp;&nbsp;:</span> <span class="orange"> $ :{{$product->price?$product->price:'-'}}</span></div>
					<div class="clear"></div>
				<a type="button" href="#" class="btn btn-info passingID" style="background:#3f808a;width: 100%; " data-toggle="modal"  data-target="#myModal"   data-id="{{$product->id}}" data-title="{{$product->title}}" data-price="{{$product->price}}"  ><img src="{{asset('assets/images/template/icon_btncart.png')}}"   class="right15">Want To Buy</a>
				
				</div>
			</div>
			<style>
			.csshidden { display:none;}
			</style>
			<div class="product_detail2">
				<a href="javascript:void(0)"><div class="detail" id="tab1">Description</div></a>
				<div class="clear"></div>
				<div class="detail_product csshidden" id="detailtab1" style="display: block; border: 1px dotted black;">
				{{$product->desc?$product->desc:'-'}} 
				</div>
				<div class="detail_product csshidden" id="detailtab2" style="display: block ;"></div>
				<div class="clear"></div>
				<div class="top20"></div>
				<!-- <div s$tyle="text-align:left;"><span class="add_heading">Net Weight&nbsp;&nbsp;:</span> 175</div>
				<div class="clear"></div>
				<div style="text-align:left;"><span class="add_heading">Registered No.&nbsp;&nbsp;:</span> 10-1-5875035</div> -->
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<div class="top20"></div>
			<script>
			function clickDetailS(n){
			if(n==1){
			$("#tab1").removeClass("detail2").addClass("detail");
			$("#detailtab1").show();
			$("#tab2").removeClass("detail").addClass("detail2");
			$("#detailtab2").hide();
			}else{
			$("#tab2").removeClass("detail2").addClass("detail");
			$("#detailtab2").show();
			$("#tab1").removeClass("detail").addClass("detail2");
			$("#detailtab1").hide();
			}
			}
			clickDetailS(1);
			</script>
			<!-- product 1 -->
		</div>
	</div>

	<div class="clear"></div>
	<div class="top20"></div>
</section>
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Fill Your Inquiry Header</h4>
        </div>
        <div class="modal-body">
          <form action="{{route('sendmail')}}"  method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group" metho="post" style="display: none;" >
            <input  type="text" class="form-control" name="id" id="id" value="" >    
            </div>

            <div class="form-group">
                <label>Product Title</label>
            <input type="text" class="form-control" name="product_title" id="title" >    
            </div>
            <div class="row">
            <div class="form-group col-xs-3">
                <label>Product Qunatity </label>
            <input type="text" class="form-control" name="qty" id="qty" value="1">    
            </div>
            <div class="form-group col-xs-3">
                <label>Product Price</label>
            <input type="text" class="form-control" name="price" id="price" value="">    
            </div>
            <div class="form-group  col-xs-3">
                <label>Total Price</label>
            <input type="text" class="form-control" name="total_price" id="total" value="">    
            </div>
            </div>
            <!-- <div class="form-group">
                <label>Product Price</label>
            <input type="text" class="form-control" name="price" id="price" value="">    
            </div> -->
            <div class="form-group">
                <label>Your Full Name</label>
            <input type="text" class="form-control" name="name" id="name" value="" required>    
            </div>
            <div class="form-group">
                <label>Your Email</label>
            <input type="text" class="form-control" name="email" id="email" value="" required>    
            </div>
            <div class="form-group">
                <label>Your Phone</label>
            <input type="text" class="form-control" name="phone" id="phone" value="" required>    
            </div>
            <div class="form-group">
                <label> Your Address</label>
            <input type="text" class="form-control" name="address" id="address" value="" required>    
            </div>
            <div class="form-group">
                <label>Your Country</label>
            <input type="text" class="form-control" name="country" id="country" value="" required>    
            </div>
            <div class="form-group">
                <label>Description</label>
            <textarea type="text" class="form-control" name="message" id="message" required></textarea>    
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