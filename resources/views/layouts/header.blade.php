<header class="desktop_show"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <div class="content">
        <div class="logo"><a href="/"><img src="{{asset('assets/images/logo-1.png')}}"></a></div>
        <div class="fright top13" style="color: white">
            Become a Distributor Call Whatsapp & Viber  +66843443444
        </div>
        <nav class="menutop" >
            Become a Distributor Call Whatsapp & Viber  +66843443444
        </nav>

        <div id="dropdown-1" class="dropdown dropdown-tip dropdown-anchor-right">
            <ul class="dropdown-menu" style="background:#3f808a; width:150px;">
                <li	 style="padding-top:4px; padding-bottom:4px;"><a href="#" style="color:#fff;">Order history</a></li>
                <li style="padding-top:4px; padding-bottom:4px;"><a href="#" style="color:#fff;">Edit profile</a></li>
                <li style="padding-top:4px; padding-bottom:4px;"><a href="#" style="color:#fff;">Change password</a></li>
                <li style="padding-top:4px; padding-bottom:4px;"><a href="#" onClick="javascript:if(confirm('Do you want to logout ?')){return true;}else{return false;}" style="color:#fff;">Logout</a></li>
            </ul>
        </div>

        <style>
            #menufix {float:right;  }
            /*#menufix ul > li > a:hover{list-style:none; padding:0; font-size:21px;}*/
            #menufix ul.hassub a{display:block; text-decoration:none; line-height:1.5;}

            #menufix ul > li{position:relative;float:left;margin:0; padding-bottom:12px;}

            #menufix ul > li:hover > a{text-decoration:none; background:#3f808a; color:#fff;}
            #menufix ul > li a.active{text-decoration:none; background:#3f808a; color:#fff;}

            #menufix ul.hassub {list-style:none; width:230px;display:none;position:absolute;top:100%;z-index:4; left:0;  right:auto;background:#3f808a; border-radius: 0px 0px 5px 5px;padding:0px 10px 0px 10px;}
            #menufix ul.hassub > li {
                float:none;color:#fff;text-align:left; width:90%; padding-bottom:0px;
            }
            #menufix ul.hassub > li a {color:#fff; width:100%;}
            #menufix ul.hassub > li:hover a {color:#333; background:#fff; -moz-border:0px; -webkit-border-radius:0px; border-radius:0px; }

            #menufix ul ul.hassub li a{border-bottom:1px dashed #fff;-moz-border:0px; -webkit-border-radius:0px; border-radius:0px;}
            #menufix ul ul.hassub li:last-child a{border-bottom:none;-moz-border:0px; -webkit-border-radius:0px; border-radius:0px;}
            #menufix ul li:hover > ul.hassub{display:block; }
            #menufix ul li.sublast:hover > ul.hassub{left:-140%;}

            #menufix ul ul.hassub li:first-child { height:10px;}
            #menufix ul ul.hassub li:last-child { border-radius: 0px 0px 5px 5px; padding-bottom:10px;}

            /* #menufix ul ul.hassub li div.arrows{width:8%; vertical-align:middle; text-align:right;color:#fff; }*/
            #menufix ul ul.hassub li div.timenu{width:85%; text-align:left;}
        </style>
        <nav id="menufix" class="menubar">
            <ul class="menufix">
                <li><a href="/" >Home</a></li>
                <li><a href="{{route('aboutus')}}" >About us</a>
                    <!-- <ul class="hassub" style="width:200px;">
                         <li></li>
                                                         </ul>-->
                </li>
                <li><a href="{{route('products')}}" >Products</a>
                    <ul class="hassub" style="width:200px;">
                        <li></li>

                         @foreach(App\ProductsCategory::all() as $item)   
                        <li>
                            <div class="fleft timenu" style="font-size:12px;"><a href="{{route('searchbycategory',['id'=>$item->id])}}"> {{$item->title}}</a></div>
                            <div class="clear"></div>
                        </li>
                        @endforeach
                       




                    </ul>
                </li>
                <!-- <li><a href="review_en.html" >Review</a></li>
                <li><a href="location_en.html" >Store Location</a></li> -->
                <li><a href="{{route('reviewvideo')}}" >Review Video</a></li>
<!--                <li><a href="howtobuy_en.php" >How to buy</a></li>-->
                <li><a href="{{route('contactus')}}" >Contact us</a></li>
            </ul>
        </nav>
        <div class="clear"></div>
    </div>
</header>

<header class=" mobile-tablet_show">
    <a id="cd-logo" href="index.php"><img src="{{asset('assets/images/logo-1.png')}}" height="60"></a>
<!--    <a href="#" class="username"><img src="images/template/icon_user.png" class="right12"><span style="color:#2f2f2f;">USERNAME</span></a>-->
    <a id="cd-menu-trigger" href="#0" class=""><span class="cd-menu-icon"></span></a>
</header>


<nav id="cd-lateral-nav">
    <ul class="cd-navigation cd-single-item-wrapper">
        <li>
            <!--            	<div class="fleft top9"><a href="login_en.html" class="current" style="color:#2f2f2f; background:#ff7d00; line-height:0"><img src="images/template/icon_login.png" style="padding-top:2px;" class="right12">LOGIN</a></div>-->
            <!--            	<div class="fright">-->
            <!--                    <a href="index.html" class="fright right15 top24 bottom23" style="padding:0; line-height:0;"><img src="images/template/flag_th_over.png"></a>-->
            <!--                    <a href="index_en.html" class="fright right10 top24 bottom23" style="padding:0; line-height:0;"><img src="images/template/flag_en.png"></a>-->
            <!--                </div>-->
        </li>
    </ul>
    <div class="clear"></div>

    <ul class="cd-navigation cd-single-item-wrapper">
        <li><a href="index.php">HOME</a></li>
        <li><a href="aboutus_en.php">ABOUT US</a></li>
        <!--<li><a href="product_en.php">PRODUCT</a></li>-->
        <li class="item-has-children">
            <a href="product_en.php">PRODUCT</a>
            <ul class="sub-menu">
                <li><a href="product_en.php"><i class="fa fa-arrow-circle-right"></i>&nbsp; All Product</a>
                @foreach(App\ProductsCategory::all() as $item)
                <li><a href="{{route('searchbycategory',['id'=>$item->id])}}"><i class="fa fa-arrow-circle-right"></i>&nbsp; {{$item->title}}</a>

                @endforeach

               




                </li>
            </ul>
        </li>
        <!-- item-has-children -->
        <li><a href="reviewvideo.php" >Review Video</a></li>
        <!-- <li><a href="howtobuy_en.php">HOW TO BUY</a></li>-->
        <li><a href="contactus_en.php">CONTACT US</a></li>
    </ul>
        <!-- cd-single-item-wrapper -->

</nav>

<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{('assets/js/main.js')}}"></script> <!-- Resource jQuery -->