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
                @foreach(App\Products::all() as $items)
                <div class="product-inner2 line-content">
                    <div class="product_img"><a href=" {{route('productsdetails',['id'=>$items->id])}}"><img src="{{asset($items->image?$items->image:'')}}" border="0" width="100%" class=""></a></div>
                    <div class="product_heading">{{$items->title?$items->title:''}}</div>
                    <div class="product_priceonsale">Price : <span class="orange"> $ : {{$items->price}}</span></div>
                    <a  href=" #" class="btn btn-info btn-md" style="background:#3f808a;width: 100%; " data-toggle="modal" data-target="#myModal"><img src="{{asset('assets/images/template/icon_btncart.png')}}" class="right15">Want To Buy</a>

                    <!--                        <a href="#dialogboxscart"  class="linkAddtoCart" name="81"><div class="product_btnaddtocart"><img src="images/template/icon_btncart.png" class="right15">Add to Cart</div></a>-->
                </div>
                 @endforeach
            </div>
           


            </div>
<ul class="prev">prev</ul>
<ul id="pagin"></ul>
<ul class="next">next</ul>
<ul class="last">last</ul>
            <div class="clear"></div>
            <div class="top45"></div>
        </div>
        <div class="clear"></div>
    </section>

        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">
                            Contact Us
                        </h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" method="post" id="reused_form">
                            <p> Send your message in the form below and we will get back to you as early as possible. </p>
                            <div class="form-group">
                                <label for="name"> Name:</label>
                                <input type="text" class="form-control" id="name" name="name" required maxlength="50">
                            </div>
                            <div class="form-group">
                                <label for="email"> Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required maxlength="50">
                            </div>
                            <div class="form-group">
                                <label for="email">Phone :</label>
                                <input type="text" class="form-control" id="phone" name="phone" required maxlength="50">
                            </div>
                            <div class="form-group">
                                <label for="email">Country :</label>
                                <input type="text" class="form-control" id="country" name="country" required maxlength="50">
                            </div>
                            <div class="form-group">
                                <label for="name"> Message:</label>
                                <textarea class="form-control" type="textarea" name="message" id="message" placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
                            </div>
                            <button type="submit" class="btn btn-lg btn-success btn-block" style="background:#3f808a; " id="btnContactUs">Send&rarr;</button>
                        </form>
                        <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Sent your message successfully!</h3> </div>
                        <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
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
@endsection


   
