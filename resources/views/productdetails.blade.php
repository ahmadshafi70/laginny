@extends('layouts.app')
@section('content')
<div class="content top40 lineheight25">
                <div class="product_imgdetail">
                    <div class="targetarea diffheight">
                        <img src="{{asset('
                        assets/images/pro_images/Neem_Peel-Off-Mask-with-Cover-600x900.jpg')}}" border="0" width="100%" id="multizoom" name="imgB" style="visibility: visible; opacity: 1;">                    </div>
                    <div class="product_share">
                        <div class="center" align="center">
                            <div class="center" style="padding-bottom:10px;">

                                <div class="addthis_toolbox addthis_default_style addthis_20x20_style fleft" addthis:url="http://www.yc-beauty.com/product_detail_en.php?pid=" addthis:title="YC Whitening Facial Scrub With Cherry Extract (YC489)" addthis:description="รหัสสินค้า YC489">
                                    <a class="addthis_button_facebook" url="#"></a>
                                    <a class="addthis_button_twitter"></a>
                                    <a class="addthis_button_google_plusone_share"></a>
                                    <a class="addthis_button_email"></a>
                                </div>
                            </div>
                        </div>
                        <!--<div class="fleft">
                                <iframe src="//www.facebook.com/plugins/like.php?href=product_detail.php?pid=&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;share=false&amp;height=21&amp;appId=758775797493193" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe>

                        </div>-->
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="product_detail">
                    <div class="product_heading">NEEM(LA305)</div>
                    <!--<div class="product_properties">รายละเอียดอย่างย่อ</div>-->
                    <div class="addtocart">
                        <div style="text-align:left;"><span class="add_heading">Code :</span>LA305</div>
                        <div class="clear"></div>

                        <div style="text-align:left;"><span class="add_heading">Price&nbsp;&nbsp;:</span> <span class="orange"> $ 4.99</span></div>


                        <div class="clear"></div>
                        <a type="button" class="btn btn-info btn-md" style="background:#3f808a;width: 100%; " data-toggle="modal" data-target="#myModal"><img src="{{asset('assets/images/template/icon_btncart.png')}}" class="right15">Want To Buy</a>
				</div>

                </div>
                <style>
                    .csshidden { display:none;}
                </style>
                <div class="product_detail2">

                    <a href="javascript:void(0)"><div class="detail" id="tab1">Description</div></a>
                    <div class="clear"></div>
                    <div class="detail_product csshidden" id="detailtab1" style="display: block;"></div>
                    <div class="detail_product csshidden" id="detailtab2" style="display: none;"></div>

                    <div class="clear"></div>
                    <div class="top20"></div>
                    <div s$tyle="text-align:left;"><span class="add_heading">Net Weight&nbsp;&nbsp;:</span> 175</div>
                    <div class="clear"></div>
                    <div style="text-align:left;"><span class="add_heading">Registered No.&nbsp;&nbsp;:</span> 10-1-5875035</div>
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
@endsection