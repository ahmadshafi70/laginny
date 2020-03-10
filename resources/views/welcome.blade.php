<?php 
use App\Products;
?>

@extends('layouts.app')
@section('content')
@include('components.banner')
<div class="clear"></div>
<section>
    <div class="arrowleft"><img src="{{asset('assets/images/template/icon_arrowleft.png')}}" class="prev" style="cursor:pointer"></div>
    <div class="arrowright"><img src="{{asset('assets/images/template/icon_arrowright.png')}}" class="next" style="cursor:pointer"></div>
<div class="content">
        
    <div class="title bgorange">Featured Products</div>
    <div class="linetitleorange"><a href="product_en.php">more +</a></div>
    <div class="clear"></div>

<div id="prodslide" style="width: 100%; opacity: 1; display: block;" class="owl-carousel owl-theme">
    
    <div class="owl-wrapper-outer">

        <div class="owl-wrapper" style="width: 4236px; left: 0px; display: block; transform: translate3d(-1059px, 0px, 0px); transition: all 400ms ease 0s;">
        @foreach(App\Products::all() as $items )
            <div class="owl-item" style="width: 353px;">
                <div class="product">
                    <div class="product_img"><a href="
                        #"><img src="{{asset($items->image?$items->image:'')}}" border="0" width="100%" class=""></a>
                    </div>
                    <div class="product_heading">
                    {{$items->title}}
                    </div>
                    <div class="product_priceonsale">Price : <span class="orange"> {{$items->price}}</span>
                    </div>
                    <!--                        <a href="#dialogboxscart"  class="linkAddtoCart" name="81"><div class="product_btnaddtocart"><img src="images/template/icon_btncart.png" class="right15">Add to Cart</div></a>-->
                    <a type="button" class="btn btn-info btn-md" style="background:#3f808a;width: 100%; " data-toggle="modal" data-target="#myModal"><img src="{{asset('assets/images/template/icon_btncart.png')}}" class="right15">Want To Buy</a>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>

         
                
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slide.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slide_theme.css')}}">
        <script src="{{asset('assets/lib_js/owl.carousel.js')}}"></script>
        <script>
                  $(document).ready(function () {
                      var prodslide =  $("#prodslide");
                        prodslide.owlCarousel({
                            autoPlay : 3000,
                             autoHeight : false,
                             stopOnHover : true,
                             navigation : false, // Show next and prev buttons
                             slideSpeed : 400,
                             paginationSpeed : 500,
                             autoWidth:false,
                             items : 4
                        });
                          $(".next").click(function(){
                            prodslide.trigger('owl.next');
                          })
                          $(".prev").click(function(){
                            prodslide.trigger('owl.prev');
                          })
                
                  });
        </script>
            
            <div class="clear"></div>
            <div class="top45"></div>
            <div class="title bgorange">Recommended Products</div>
            <div class="linetitleorange"><a href="product_en.php">more +</a></div>
            <div class="clear"></div>
            <div class="col_product" style="width: 100%;">
                @foreach(App\Products::all() as $items )
                @if($items->type==1)
                <div class="product-inner2" style="width:23%;">
                    <div class="product_img"><a href="APRICOT(LA306).php"><img src="{{asset($items->image?$items->image:'')}}" border="0" width="100%" class=""></a></div>
                    <div class="product_heading">{{$items->title}}</div>
                    <div class="product_priceonsale">Price : <span class="orange"> $ : {{$items->price}}</span></div>
                    <a type="button" href="#" class="btn btn-info btn-md" style="background:#3f808a;width: 100%; " data-toggle="modal" data-target="#myModal"><img src="{{asset('assets/images/template/icon_btncart.png')}}" class="right15">Want To Buy</a>
                    <!--                        <a href="#dialogboxscart"  class="linkAddtoCart" name="81"><div class="product_btnaddtocart"><img src="images/template/icon_btncart.png" class="right15">Add to Cart</div></a>-->
                </div>
                @endif
                @endforeach
                
                
             
            </div>
            
            <div class="clear"></div>
            <div class="contactzone">
                <div class="content">
                    <div class="title bggray">Contact Us</div>
                    <div class="linetitlegray"></div>
                    <div class="clear"></div>
                    <div class="setcontact">
                        <div class="facebook desktop_show"><!--<img src="images/template/facebook.jpg" width="100%">-->
                        <script async="" defer="" crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&amp;version=v5.0"></script>
                        <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/laginnycare/?ref=br_rs" data-tabs="timeline" data-width="170" data-height="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=181&amp;height=250&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Flaginnycare%2F%3Fref%3Dbr_rs&amp;locale=en_GB&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=170"><span style="vertical-align: bottom; width: 180px; height: 250px;"><iframe name="f2e8bd4d73b1c88" width="170px" height="250px" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v5.0/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D46%23cb%3Dff36ebf458a308%26domain%3Dlaginny.com%26origin%3Dhttps%253A%252F%252Flaginny.com%252Ff352e8e579bd6d%26relation%3Dparent.parent&amp;container_width=181&amp;height=250&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Flaginnycare%2F%3Fref%3Dbr_rs&amp;locale=en_GB&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=170" style="border: none; visibility: visible; width: 180px; height: 250px;" class=""></iframe></span></div>
                    </div>
                    <div class="facebook mobile-tablet_show"><!--<img src="images/template/facebook2.jpg" width="100%">-->
                    <iframe width="100%" src="http://www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/YCbeautycare&amp;width=500&amp;height=230&amp;colorscheme=light&amp;show_faces=true&amp;connections=12&amp;border_color&amp;stream=false&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:230px; background:#ffffff;" allowtransparency="true"></iframe>
                </div>
                <div class="contact">
                    <div class="iconhome">
                        <span class="orange">Address</span> <br>
                    LA Ginny Co.,Ltd Thailand 114 Soi Petchkasem112, Nongkangplu, Nongkham, Bangkok.</div>
                    <br>
                    <div class="iconphone">Call us : +66843443444</div>
                    <div class="iconmail">Email :  Thitima@laginny.com </div>
                </div>
                <div class="about tablet-desktop_show">
                    <div class="heading">ABOUT US</div>
                    <div class="detail">
                        La Ginny is a cosmetic range that is developed by a pharmacists.
                        Laginny Experience a new generation of skincare with the ability to repair and renew with long term results.
                    </div>
                </div>
            </div>
            <div class="googlemap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d496113.9204553192!2d100.3529219945537!3d13.725108774955023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sLA%20Ginny%20Co.%2C%20Ltd%20Thailand%20114%20Soi%20Petchkasem112%2C%20Nongkangplu%2C%20Nongkham%2C%20Bangkok.!5e0!3m2!1sen!2s!4v1580186914807!5m2!1sen!2s" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>
</div>
</div>
</section>
@endsection