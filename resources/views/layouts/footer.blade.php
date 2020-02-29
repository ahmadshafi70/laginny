<footer>
    <div class="content desktop_show"> <!-- content -->
        <div class="sitemap" style="width:17%;">
            <div class="titllesitemap">Information</div>
            <ul class="sitemapfix">
                <li><a href="index.php">Home</a></li>
                <li><a href="contactus_en.php">Contact Us</a></li>
            </ul>
        </div>

        <div class="sitemap left55" style="width:18%;">
            <div class="titllesitemap">About us</div>
            <ul class="sitemapfix">
                <li><a href="aboutus_en.php">About</a></li>
                <li><a href="reviewvideo.php">Review Video</a></li>

            </ul>
        </div>

        <div class="sitemap left55"  style="width:38%;">
            <div class="titllesitemap">Product</div>
            <ul class="sitemapfix fleft">
                <li>
                    <a href="PeelOffMask.php"> Peel Off Mask </a>
                </li>
                <li>
                    <!--                                                    <a href="WhiteningFaceWashFoam.html">Whitening FaceWash Foam </a>-->
                    <a href="AntiAgingSerum.php"> Anti Aging Serum </a>
                </li>
                <li>
                    <!--                                                    <a href=" WhiteningFaceWashFoamMen.html">Whitening FaceWash Foam Men </a>-->
                    <a href="BodyLotion.php"> Body Lotion </a>
                </li>
                <li>
                    <a href="MiracleSet.php"> Miracle Set </a>
                </li>
                <li>
                    <a href="LaginnySoap.php"> Laginny Soap </a>
                </li>
                <li>
                    <a href="HairCoat.php"> Hair Coat </a>
                </li>
                <!--<li><a href="#">SOAP</a></li>
<li><a href="#">FACE WASH TONER</a></li>
<li><a href="#">FACIAL CREAM</a></li>
<li><a href="#">GOLD SERIES</a></li>
<li><a href="#">PEEL-OFF MASK</a></li>-->
            </ul>
            <ul class="sitemapfix fleft">
                <li>
                    <a href="AntiAgingSerum.php"> Anti Aging Serum </a>
                </li>
                <li>
                    <a href="BodyLotion.php"> Body Lotion </a>
                </li>
                <li>
                    <a href="FaceLotion.php"> Face Lotion </a>
                </li>
                <li>
                    <a href=" WhiteningShowerCream.php"> Whitening Shower Cream </a>
                </li>

                <!--<li><a href="#">SPACIAL SOAP</a></li>
<li><a href="#">FACIAL SCRUB</a></li>
<li><a href="#">BODY LOTION</a></li>
<li><a href="#">MILK SERIES</a></li>
<li><a href="#">SALT</a></li>-->
            </ul>
        </div>


        <div class="clear"></div>
    </div> <!-- end content -->
    <div class="copyright">Copyright @ 2020 Laginny .com All rights reserved.</div>
</footer>

<script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
<script type="text/javascript" src="../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-535f32dc452840ef"></script>
<style>
    #lean_overlay {
        position: fixed;
        z-index:0;
        top: 0px;
        left: 0px;
        height:100%;
        width:100%;
        background: #000;
        display: none;
    }

</style>
<script type="text/javascript" src="lib_js/jquery.leanModal.min.js"></script>
<script>
    $(document).ready(function(){
        $("#linkLogin").click(function(){
            $("#dialogboxslogin").show();
        });
        $('#linkLogin').leanModal({ top : 80,overlay:0.7,closeButton: ".dialogboxs-modal_close"});

        $(".linkAddtoCart").each( function() {
            $(this).click(function(){
                addProductToCartP($(this).attr('name'),'add');
                //alert($(this).attr('name'))
            });
            $(this).leanModal({ top : 80,overlay:0.7,closeButton: ".dialogboxs-modal_close",overlayClose: true});
        })

        $("#linkAddtoCartD").click(function(){
            addProductToCartP($(this).attr('name'),'add');
            //alert($(this).attr('name'))
        });
        $("#linkAddtoCartD").leanModal({ top : 80,overlay:0.7,closeButton: ".dialogboxs-modal_close",overlayClose: true});
    })

</script>
<script>
    function addProductToCartP(pid, action){
        var spidselelct="";
        var qty_sarr=0;
        var spidselelct2="";
        var err_addcart = 0;

        var stocknow = $("#stocknow").val();
        var pack = $("#hidProductPackageSEL").val();

        var prices = $("#txtPSPrice"+pid).val();
        spidselelct = "@"+$("#txtSize"+pid).val();
        spidselelct2 = "@"+$("#txtSize"+pid).val();

        qty_sarr = $("#txtQty"+pid).val();
        if(qty_sarr > 1){
            var qty_arr = "@"+qty_sarr;

        }else{
            var qty_arr = "@"+1;
        }

        if(pid > 0){
            $("#dialogboxscart-ct").html('<center><i class="fa fa-spinner fa-spin" style="font-size:20px; margin-bottom:50px; margin-top:50px;"></i></center>')
            $.ajax({
                type: "GET",
                url: "refresh_cart_en.php?pid="+pid+"&process="+action+"&num="+qty_arr,
                cache: false,
                dataType:"html",
                success: function(html){
                    html_arr = html.split("++");
                    //alert(html)
                    if(html_arr[1]!="error"){
                        var num_succ =1;
                    }else{
                        var num_succ =0;
                    }

                    $("#numc_left").html(html_arr[2]);
                    $("#numc_top").html("("+html_arr[2]+")");
                    $("#total_left").html(html_arr[3]+" บาท");



                    $.ajax({
                        type: "GET",
                        url: "refresh_cartitem_en.php?pid="+pid+"&spid="+spidselelct2+"&succ="+num_succ+"&num="+qty_arr,
                        cache: false,
                        dataType:"html",
                        success: function(g){
                            $("#dialogboxscart-ct").html(g);
                        }
                    });
                }
            });
            $("#dialogboxscart").show();
        }else{
            $("#dialogboxscart-ct").html('<center>Please choose product</center>')
            $("#dialogboxscart").show();
        }
    }

</script>