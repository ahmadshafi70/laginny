  <div class="arrowleft"><img src="{{asset('assets/images/template/icon_arrowleft.png')}}"  class="prev" style="cursor:pointer"></div>
            <div class="arrowright"><img src="{{asset('assets/images/template/icon_arrowright.png')}}"  class="next" style="cursor:pointer"></div>
            <div class="content">
                <div class="title bgorange">Featured Products</div>
                <div class="linetitleorange"><a href="product_en.php">more +</a></div>
                <div class="clear"></div>

                <div  id="prodslide" style="width:100%">
                      
                                            <div class="product">
                                                 <div class="product_img"><a href="MILK(LA101).php"><img src="images/pro_images/    Milk-Extract-Front-300x300.jpg" border="0" width="100%" class=""></a>
                                                 </div>
                                                <div class="product_heading">

                                                    MILK(LA101)</div>
                                                <div class="product_priceonsale">Price : <span class="orange"> $4.99</span></div>
                                                <!--                        <a href="#dialogboxscart"  class="linkAddtoCart" name="81"><div class="product_btnaddtocart"><img src="images/template/icon_btncart.png" class="right15">Add to Cart</div></a>-->
                                                <button type="button" class="btn btn-info btn-md" style="background:#3f808a;width: 100%; " data-toggle="modal" data-target="#myModal"><img src="images/template/icon_btncart.png" class="right15">Want To Buy</button>
                        </div>
                                          
                       
                                          
                                            <div class="product">
                                                <div class="product_img"><a href="NEEM(LA305).php"><img src="images/pro_images/Neem_Peel-Off-Mask-with-Cover-600x900.jpg" border="0" width="100%" class=""></a></div>
                                                <div class="product_heading">
                                                    NEEM(LA305)</div>
                                                <div class="product_priceonsale">Price : <span class="orange"> $4.99</span></div>
                                                <button type="button" class="btn btn-info btn-md" style="background:#3f808a;width: 100%; " data-toggle="modal" data-target="#myModal"><img src="images/template/icon_btncart.png" class="right15">Want To Buy</button>

                                                <!--                        <a href="#dialogboxscart"  class="linkAddtoCart" name="81"><div class="product_btnaddtocart"><img src="images/template/icon_btncart.png" class="right15">Add to Cart</div></a>-->
                                                </div>
                                                <div class="product">
                                                    <div class="product_img"><a href="PAPAYA(LA307).php"><img src="images/pro_images/Papaya_Peel_Off_Front_Back_New_Cover-600x600.jpg" border="0" width="100%" class=""></a></div>
                                                    <div class="product_heading">
                                                        PAPAYA(LA307)</div>
                                                    <div class="product_priceonsale">Price : <span class="orange"> $4.99</span></div>
                                                    <button type="button" class="btn btn-info btn-md" style="background:#3f808a;width: 100%; " data-toggle="modal" data-target="#myModal"><img src="images/template/icon_btncart.png" class="right15">Want To Buy</button>

                                                    <!--                        <a href="#dialogboxscart"  class="linkAddtoCart" name="81"><div class="product_btnaddtocart"><img src="images/template/icon_btncart.png" class="right15">Add to Cart</div></a>-->
                                                </div>
                                                <div class="product">
                                                    <div class="product_img"><a href="SunscreenFaceLotion(SS%20002).php"><img src="images/pro_images/Sunscreen-Face-Lotion-300x300.jpg" border="0" width="100%" class=""></a></div>
                                                    <div class="product_heading">Sunscreen Face Lotion (SS 002)</div>
                                                    <div class="product_priceonsale">Price : <span class="orange">$ 8.99</span></div>
                                                    <button type="button" class="btn btn-info btn-md" style="background:#3f808a;width: 100%; " data-toggle="modal" data-target="#myModal"><img src="images/template/icon_btncart.png" class="right15">Want To Buy</button>

                                                    <!--                        <a href="#dialogboxscart"  class="linkAddtoCart" name="81"><div class="product_btnaddtocart"><img src="images/template/icon_btncart.png" class="right15">Add to Cart</div></a>-->



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