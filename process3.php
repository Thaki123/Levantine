<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Levantine</title>
    <link rel="stylesheet" href="css/style.css" />
    <script type="text/javascript" language="javascript" src="js/jquery.js"></script>

    <meta name="viewport" content="width=device-width,initial-scale=1">
<style>
.descBox{float:none;}
</style>
</head>

<body>
<div style="position:fixed; top:0; right:0; color:red; z-index:88888" class="maz"></div>
    <div class="bodyAll">
        <?php include_once "menu.php"; ?>
        <section class="headerSection">
            <?php include_once "header.php"; ?>

            <div class="pageHeading">
                <h1>Our Process</h1>
            </div>

            <div class="pageTitle">
                <h2>WE customize OUR services & CONSULTING to meet EACH client’s needs & requirements.</h2>
            </div>

            <div class="pageDots">...</div>
        </section>

        <section class="bodySection">

            <div class="leftSection">
                <div class="halfBox imgBox imgBox1" style="background-image: url('img/exotica.jpg');"></div>
                <div class="halfBox imgBox imgBox2" style="background-image: url('img/image2.jpg');"></div>
                <div class="halfBox imgBox imgBox3" style="background-image: url('img/exotica.jpg');"></div>
                <div class="halfBox imgBox imgBox4" style="background-image: url('img/image1.jpg');"></div>
            </div>
            <div class="rightSection">
                <div class="halfBox descBox section-1">
                    <div class="seperator seperator-1"></div>
                    <div class="boxTitle">WE ARE committed to excellence</div>
                    <div class="boxDesc">Levantine Luxury Packaging is a customized luxury packaging supplier. We are specialized in rigid and flat boxes, folders, cases, menus, sophisticated book covers, jewelry boxes, leather bill holders and many more items.We create luxury
                        packaging for brands that seek to stand out. <br/><br/> Established in 2016, we strive to provide outstanding quality, reliable services, on-time delivery and long-term business relationships backed up by a team of experts and
                        the latest innovative packaging techniques in a modern and dynamic environment.</div>
                    <div class="seperator seperator-1"></div>
                </div>
                <div class="halfBox descBox section-2">
                    <div class="seperator seperator-2"></div>
                    <div class="boxTitle">WE ARE committed to excellence</div>
                    <div class="boxDesc">Levantine Luxury Packaging is a customized luxury packaging supplier. We are specialized in rigid and flat boxes, folders, cases, menus, sophisticated book covers, jewelry boxes, leather bill holders and many more items.We create luxury
                        packaging for brands that seek to stand out. <br/><br/> Established in 2016, we strive to provide outstanding quality, reliable services, on-time delivery and long-term business relationships backed up by a team of experts and
                        the latest innovative packaging techniques in a modern and dynamic environment.</div>
                        <div class="seperator seperator-2"></div>
                </div>
                <div class="halfBox descBox section-3">
                    <div class="seperator seperator-3"></div>
                    <div class="boxTitle">WE ARE committed to excellence</div>
                    <div class="boxDesc">Levantine Luxury Packaging is a customized luxury packaging supplier. We are specialized in rigid and flat boxes, folders, cases, menus, sophisticated book covers, jewelry boxes, leather bill holders and many more items.We create luxury
                        packaging for brands that seek to stand out. <br/><br/> Established in 2016, we strive to provide outstanding quality, reliable services, on-time delivery and long-term business relationships backed up by a team of experts and
                        the latest innovative packaging techniques in a modern and dynamic environment.</div>
                        <div class="seperator seperator-3"></div>
                </div>
                <div class="halfBox descBox section-4">
                    <div class="seperator seperator-4"></div>
                    <div class="boxTitle">WE ARE committed to excellence</div>
                    <div class="boxDesc">Levantine Luxury Packaging is a customized luxury packaging supplier. We are specialized in rigid and flat boxes, folders, cases, menus, sophisticated book covers, jewelry boxes, leather bill holders and many more items.We create luxury
                        packaging for brands that seek to stand out. <br/><br/> Established in 2016, we strive to provide outstanding quality, reliable services, on-time delivery and long-term business relationships backed up by a team of experts and
                        the latest innovative packaging techniques in a modern and dynamic environment.</div>
                        <div class="seperator seperator-4"></div>
                </div>
                <div class="halfBox descBox section-end"> </div>
                    
               
            </div>
            

            <div class="contactForm">
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
        </section>
        
        <section class="footerSection" style="position:absolute; z-index:99999; width:100%; margin-top:0;">Copyright © 2017 Levantine Luxury Packaging. All rights reserved. </section>
    </div>

    
    <script type="text/javascript" language="javascript" src="js/manage.js"></script>
    <script type="text/javascript " language="javascript " src="js/owl.carousel.js "></script>

    <script>
        $(document).ready(function() {
			$window = $(window);
				var wH = $(window).height();
				
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
			
				
            var distance = $('.bodySection').offset().top; 
                
            $(".imgBox").height(wH);
			$(".section-end").height(wH/4);
            var distance2 = $('.section-2').offset().top;
			var distance3 = $('.section-3').offset().top;
			var distance4 = $('.section-4').offset().top;
            $window.scroll(function() {
					//$(".maz").html($window.scrollTop()+" "+distance+" "+distance2+" "+distance3+" "+distance4);				
                if ($window.scrollTop() >= distance) {
                    // Your div has reached the top
                    $(".leftSection").css({
                        "position": "fixed",
                        "top": "0px"
                    });
                    //$(".headerSection").css({"display": "none" });
                        
                }else{
					$(".leftSection").css({
                        "position": "static",
                        "top": "0"
                    });
                    //$(".headerSection").css({  "display": "block"});
                    
				}

                if ($window.scrollTop() < distance2) {
					$(".imgBox2").hide()
					$(".imgBox3").hide()
					$(".imgBox4").hide()
					$(".imgBox1").fadeIn()
				}
				if ($window.scrollTop() >= distance2 && $window.scrollTop() < distance3) {
                    //alert("sec 2")
					$(".imgBox1").hide()
					$(".imgBox3").hide()
					$(".imgBox4").hide()
					$(".imgBox2").fadeIn()
                }
				if ($window.scrollTop() >= distance3 && $window.scrollTop() < distance4) {
                    //alert("sec 2")
					$(".imgBox2").hide()
					$(".imgBox1").hide()
					$(".imgBox4").hide()
					$(".imgBox3").fadeIn()
                }
				if ($window.scrollTop() >= distance4) {
                    //alert("sec 2")
					$(".imgBox1").hide()
					$(".imgBox2").hide()
					$(".imgBox3").hide()
					$(".imgBox4").fadeIn()
                }
				
            });

            
            

           
        });
    </script>

</body>

</html>