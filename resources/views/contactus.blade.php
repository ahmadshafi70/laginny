@extends('layouts.app')
@section('content')
<section>     
        	<div class="content"> <!-- content -->
<!--            	<div class="title bgorange">Contact us</div>-->
<!--                <div class="linetitleorange"></div>-->
                <div class="clear"></div>
                                  <div class="col_address">
                    <h4 class="orange">La Ginny has partnered with retailers and brand-owners in over 50 countries worldwide. We offer a customized service portfolio and a one stop solution for high quality beauty and personal care products.</h4>
                    <h5 class="green lineheight28"> LA Ginny Co., Ltd Thailand
                        114 Soi Petchkasem112, Nongkangplu, Nongkham, Bangkok.</h5>
                                                             <div class="contact-phone">Phone &nbsp; +66 843443444 </div>
                                                            <div class="contact-mail">Email &nbsp; Thitima@laginny.com</div>
<!--                                                                                  <div class="contact-web">Facebook &nbsp; <a href="#" target="_blank">#</a></div>-->
<!--                                                            <div class="contact-gps">พิกัด GPS &nbsp; 13.758919, 100.558190</div>-->
<!--                                                            <a href="upfiles/map/86_map02print_image.jpg" target="_blank" class="top39"><img src="upfiles/map/95_map02_image.jpg" width="100%"></a>-->
                                    </div>
                
                <div class="col_form">
                	                	<div class="tablet-desktop_show" style="width:48%; margin:1%; float:left; line-height:0;"></div>
<!--                                                        	<div class="tablet-desktop_show" style="width:48%; margin:1%; float:left; line-height:0;"><img src="upfiles/map/44_imgs_image.jpg" width="100%"></div>-->
<!--                                                        	<div class="tablet-desktop_show" style="width:48%; margin:1%; float:left; line-height:0;"><img src="upfiles/map/35_imgs_image.jpg" width="100%"></div>-->
<!--                                                        	<div class="tablet-desktop_show" style="width:48%; margin:1%; float:left; line-height:0;"><img src="upfiles/map/36_imgs_image.jpg" width="100%"></div>-->

<!--                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3876.021548570808!2d100.35835451513461!3d13.717144690369935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sLA%20Ginny%20Co.%2C%20Ltd%20Thailand%20114%20Soi%20Petchkasem112%2C%20Nongkangplu%2C%20Nongkham%2C%20Bangkok.!5e0!3m2!1sen!2s!4v1579960181598!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>-->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d496113.9204553192!2d100.3529219945537!3d13.725108774955023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sLA%20Ginny%20Co.%2C%20Ltd%20Thailand%20114%20Soi%20Petchkasem112%2C%20Nongkangplu%2C%20Nongkham%2C%20Bangkok.!5e0!3m2!1sen!2s!4v1580186914807!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                	                </div>
               
            
            	<div class="clear"></div>
                <div class="top25"></div>

                        <!-- Modal content-->
                 <div class="row">
                     <div class="col-md-6">
						  <div class="modal-body">
          <form action="{{route('sendmail')}}"  method="post" enctype="multipart/form-data">
            @csrf
           <div class="title bgorange">Contact us</div>
                                     <p style="color: white;"> Send your message in the form below and we will get back to you as early as possible. </p>
            
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
                     <div class="col-md-6">
                         <br>

                         <div class="title bgorange">Find Us On Facebook</div>
                         <br>
                         <br>
                         <br>

                         <script async="" defer="" crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&amp;version=v5.0"></script>
                         <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/laginnycare/?ref=br_rs" data-tabs="timeline" data-width="370" data-height="550" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="parsed" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=487&amp;height=550&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Flaginnycare%2F%3Fref%3Dbr_rs&amp;locale=en_GB&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=370"><span style="vertical-align: bottom; width: 370px; height: 550px;"><iframe name="f3b253f7c7d9b4" width="370px" height="550px" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v5.0/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D46%23cb%3Df3e41ac95fc30bc%26domain%3Dlaginny.com%26origin%3Dhttps%253A%252F%252Flaginny.com%252Ff3b5a5cca77ae28%26relation%3Dparent.parent&amp;container_width=487&amp;height=550&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Flaginnycare%2F%3Fref%3Dbr_rs&amp;locale=en_GB&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=370" style="border: none; visibility: hidden; width: 370px; height: 550px;" class=""></iframe></span></div>
                     </div>
                     <div>


        	</div>
            <div class="clear"></div>
        </div></div></section>
@endsection