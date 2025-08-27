<?php include_once "head.php"; ?>
<script>var page ="process";</script>
<!--<div style="position:fixed; top:0; right:0; color:red; z-index:88888" class="maz"></div>-->
    <div class="bodyAll">
        <?php include_once "menu.php"; ?>
        <section class="headerSection">
            <?php include_once "header.php"; ?>

            <div class="pageHeading wow fadeInUp" data-wow-delay=".6s">
                <h1>Our Process</h1>
            </div>

            <div class="pageTitle wow fadeInUp" data-wow-delay=".8s">
                <h2>WE customize OUR services & CONSULTING <br/>to meet EACH client’s needs & requirements.</h2>
            </div>

            <div class="pageDots wow fadeInUp" data-wow-delay=".9s">...</div>
        </section>

        <section class="bodySection" data-wow-delay="1s">
			
            <div class="leftSection lefty2">
                <div class="halfBox imgBox imgBox1" style="background-image: url('uploads/process/1499473137_exotica.jpg');"></div>
                <div class="halfBox imgBox imgBox2" style="background-image: url('uploads/process/1499473249_image4.jpg');"></div>
                <div class="halfBox imgBox imgBox3" style="background-image: url('uploads/process/1499473227_image3.jpg');"></div>
                <div class="halfBox imgBox imgBox4" style="background-image: url('uploads/process/1499473188_delivery.jpg');"></div>
                <?php //get_process_images($connection); ?> 
            </div>
            
            <div class="rightSection">
                <img src= "uploads/process/1499473137_exotica.jpg" class="imageHidden" width="100%"/>
                <div class="halfBox descBox section-1 fadeIn" data-wow-delay=".4s">
                    <div class="seperator seperator-1"></div>
                    <div class="boxTitle"><span style="font-size: 1.2vw">STEP #1 </span><br/>Project AssessmenT</div>
                    <div class="boxDesc">It is important first to assess your needs and understand your business before designing customized solutions for your brand or company. Our experts take time to identify your challenges, determine your target market and discover the characteristics that make your product unique. </div>
                    <div class="seperator seperator-1"></div>
                </div>
                <img src= "uploads/process/1499473249_image4.jpg" class="imageHidden" width="100%" />
                <div class="halfBox descBox section-2 fadeIn" data-wow-delay=".4s">
                    <div class="seperator seperator-2"></div>
                    <div class="boxTitle"><span style="font-size: 1.2vw">STEP #2</span><br/> PRODUCT DEVELOPMENT</div>
                    <div class="boxDesc">Our skilled team will assist you throughout the manufacturing process to determine with you directly, your creative agency, or your procurement team the product that will serve you best. After developing an exclusive design concept, we create a prototype and seek your approval. Adjustments to the design or materials can be made before getting to the final stage.</div>
                        <div class="seperator seperator-2"></div>
                </div>
                <img src= "uploads/process/1499473227_image3.jpg" class="imageHidden" width="100%" />
                <div class="halfBox descBox section-3 fadeIn" data-wow-delay=".4s">
                    <div class="seperator seperator-3"></div>
                    <div class="boxTitle"><span style="font-size: 1.2vw">STEP #3</span><br/>QUALITY CONTROL</div>
                    <div class="boxDesc">Once approved, your product will be ready for the final manufacturing stage. Effective coordination and constant communication between our experts and your team will ensure timely delivery of a flawless final product. Your exclusive packaging will be exactly crafted as it has been originally envisioned at the beginning of the process based on your requirements.</div>
                        <div class="seperator seperator-3"></div>
                </div>
                <img src= "uploads/process/1499473188_delivery.jpg" class="imageHidden" width="100%" />
                <div class="halfBox descBox section-4 fadeIn" data-wow-delay=".4s">
                    <div class="seperator seperator-4"></div>
                    <div class="boxTitle"><span style="font-size: 1.2vw">STEP #4</span><br/> DELIVERY</div>
                    <div class="boxDesc">Distribution will be made following your instructions. Our team will deliver your luxury packaging solutions to your desired address and will handle your products with great care and attention to ensure you receive them in perfect condition.</div>
                        <div class="seperator seperator-4"></div>
                </div>
                <div class="halfBox descBox section-end"> <div class="seperator seperator-4"></div> </div>
                    
               
            </div>
            
            <br clear="all" />
        </section>
        <section class="form_section">
            <div class="cntct wow thecontact">
                <div class="pageTitle wow fadeInUp" data-wow-delay=".4s">
                    <h2>our TEAM OF experts IS READY <br/>TO ANSWER ALL YOUR queries.</h2>
                </div>
                <div class="contactForm fadeInUp" data-wow-delay=".6s">
                    <form method="POST" action="#">
                        <div class="formLeft">
                            <div><input type="text" name="name" class="contactInput" placeholder="Full Name *" required/></div>
                            <div><input type="email" name="email" class="contactInput" placeholder="Email Address *" required/></div>
                            <div><input type="text" name="company" class="contactInput" placeholder="Company" /></div>
                            <div><input type="text" name="pnum" class="contactInput" placeholder="Phone Number" /></div>
                        </div>
                        <div class="formRight">
                            <div><input type="text" name="subject" class="contactInput" placeholder="Subject" /></div>
                            <div><textarea name="message" placeholder="Message" class="contactInput"></textarea></div>
                        </div>

                        <div class="boxButton">
                            <a type="submit" class="btn btn-sm animated-button thar-three swapedBoxButton">Get in Touch</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="footerSection">
            <span class="copy">Copyright © 2017 Levantine Luxury Packaging. All rights reserved. </span>
            <div class="social">
                <a href="https://www.instagram.com/levantineluxurypackaging/" target="_blank"><img src="img/instagram.png" /></a>
                <a href="https://www.facebook.com/levantineluxury/" target="_blank"><img src="img/facebook.png" /></a>
            </div>
        </section>
        <a href="#top">
            <div class="arrowUp">
                <!--<i class="fa fa-angle-up" aria-hidden="true"></i>-->
                <img src="img/btnUp.png" width="26" />
            </div>
        </a>
    </div>

    
    <style>
        .descBox{float:none;}
        /*.footerSection {position:absolute; z-index:99999; width:100%; margin-top:0;}*/
        .headerSection { 
            /*background-image: url("img/background-process-left.png"), url("img/background-process-right.png");
            background-position: left bottom, right bottom;
            background-repeat: no-repeat, no-repeat;*/
            /*background: url("img/background-process-left.png") left center no-repeat, url("img/background-process-right.png") right center no-repeat;*/
            padding: 15px;
            background-size: 100%;
            background-repeat: no-repeat;
        }
        .bodySection {
            box-shadow: 0 0 7px 1px #9f9f9f;
			visibility:hidden;
        }

        .form_section{ background-image: url("img/background-contact-1.png"); background-size: 100%; background-repeat: no-repeat;}

        
    </style>
    <script>
	$(document).ready(function() {
		
		setTimeout(function(){ 
		$(".bodySection").css({
			"display":"none",
			"visibility":"visible"
			});
		$(".bodySection").fadeIn();
		 }, 1500);
		 setTimeout(function(){$(".headerSection").css({ "background-image": 'url("img/background-about-1.png")' }); }, 1400);   
     });      
            
	$(window).load(function() {

			$window = $(window);
				var wH = $(window).height();
				var wW = $(window).width();
				// var seperator = vH - 
            //alert($(".section-4").height())
            var seperator1 = (wH- $(".section-1").height())/2;
            $(".seperator-1").height(seperator1);
            var seperator2 = (wH- $(".section-2").height())/2;
            $(".seperator-2").height(seperator2);
            var seperator3 = (wH- $(".section-3").height())/2;
            $(".seperator-3").height(seperator3);
            var seperator4 = (wH- $(".section-4").height())/2;
            //alert(seperator4);
            $(".seperator-4").height(seperator4);
			

			if(wW>800){
                
            }	
			$(".imgBox").height(wH);
			$(".section-end").height(wH/4);
			
            var distance = $('.bodySection').offset().top; 
			var ends = $('.form_section').offset().top; 
			var ends2 =ends-wH;
            
            var distance2 = $('.section-2').offset().top-100;
			var distance3 = $('.section-3').offset().top-100;
			var distance4 = $('.section-4').offset().top-100;
			
			/*************/
			$(".leftSection").css({
                        "position": "relative",
                        "top": "0"
                    });
			if ($window.scrollTop() < distance2) {
					$(".imgBox2").fadeOut()
					$(".imgBox3").fadeOut()
					$(".imgBox4").fadeOut()
					$(".imgBox1").fadeIn()
				}
				$(".leftSection .halfBox").css({ "position": "absolute" });
			/***************/
				
            $window.scroll(function() {
				//$(".maz").html($window.scrollTop()+" ---- "+distance+" ----- "+distance2+" ----- "+distance3);				
                if ($window.scrollTop() >= distance ) {
                    // Your div has reached the top
                    $(".leftSection").css({
                        "position": "fixed",
                        "top": "0px"
                    });
                    //$(".headerSection").css({"display": "none" });
                        
                }else{
					$(".leftSection").css({
                        "position": "relative",
                        "top": "0"
                    });
                    //$(".headerSection").css({  "display": "block"});
                    
				}
				if ($window.scrollTop()>=ends2 ) {
                    // Your div has reached the top
                    $(".leftSection").css({
                        "position": "absolute",
						//"height":wH+"px",
                        //"top": ends2+"px"
						"bottom": "0px",
						"top": "unset"
                    });
					
					$(".leftSection .halfBox").css({ "position": "static" });
                       
                }else{
					$(".leftSection .halfBox").css({ "position": "absolute" });
				}

                if ($window.scrollTop() < distance2) {
					$(".imgBox2").fadeOut()
					$(".imgBox3").fadeOut()
					$(".imgBox4").fadeOut()
					$(".imgBox1").fadeIn()
				}
				if ($window.scrollTop() >= distance2 && $window.scrollTop() < distance3) {
                    //alert("sec 2")
					$(".imgBox1").fadeOut()
					$(".imgBox3").fadeOut()
					$(".imgBox4").fadeOut()
					$(".imgBox2").fadeIn()
                }
				if ($window.scrollTop() >= distance3 && $window.scrollTop() < distance4) {
                    //alert("sec 2")
					$(".imgBox2").fadeOut()
					$(".imgBox1").fadeOut()
					$(".imgBox4").fadeOut()
					$(".imgBox3").fadeIn()
                }
				if ($window.scrollTop() >= distance4) {
                    //alert("sec 2")
					$(".imgBox1").fadeOut()
					$(".imgBox2").fadeOut()
					$(".imgBox3").fadeOut()
					$(".imgBox4").fadeIn()
                    
                }
				
            });

            
            

           
        });
    </script>

</body>

</html>