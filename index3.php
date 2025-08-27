    <?php include_once "head.php"; ?>
<script>var page ="home";</script>

    <style>
        .bigLogo {
            margin: 0 auto;
            margin-top:25%;
            text-align: center;
            width: 10%;
            background-color: #ffffff;
        }
        
        /*.bigLogo img {
            width: 50%;
        }*/

        /*.bodyAll {
            background-image: url("img/animated.gif");
            background-repeat: no-repeat;
        }*/

        .bodyAll {
            background-image: none;
            overflow: hidden;
        }
        .footerSection{
            margin-top: 30px;
			position:static;
        }

        .logo1 {
            top :110%;
            left: 90%;
        }

        .logo2 {
            top :-110%;
            left: 75%;
        }

        .logo5 {
            top :-110%;
            left: 5%;
        }

        .logo3 {
            top :110%;
            left: 25%;
        }

        .logo {display: none;}
        .footerSection {
            margin-top: 30px;
            position: absolute;
            bottom: 0;
        }

        .logoDesc {
            color: #B5A18C;
            text-align: center;
            text-transform: uppercase;
            margin-top: 30px;
            font-size: 3vh;
        }

        .headerSection { margin-top: 0;}
        /*.menuSection {top: 10%;}*/
        .headerTop {
    padding-bottom: 0;
}

.headerSection {padding:0;}

    </style>

    <div class="bodyAll">
    <?php include_once "menu.php"; ?>
        <section class="headerSection">
            <div class="headerTop">
                <div class="menu">
                    <div class="bars"></div>
                    <div class="bars"></div>
                    <div class="bars lastBar"></div>
                </div>
            </div>
        </section>

        <section class="bodySection">
            <div class="lgo logo1"><img src="img/logo-1.png" width="80%"/></div>
            <div class="lgo logo2"><img src="img/logo-2.png" width="80%" /></div>
            <div class="lgo logo3"><img src="img/logo-3.png" width="80%" /></div>
            <div class="lgo logo5"><img src="img/logo-6.png" width="80%" /></div>
            <div class"landingContent"> 
                <div class="bigLogo" style="display:none">
                    <img src="img/levantine-logo.gif" alt="Levantine Logo" title="Levantine Logo" width="100%"/>
                </div>
                <div class="logoDesc" style="display:none">
                    Luxury packaging solutions for <br/>
    the most recognisable brands.
                </div>
            </div>
        </section>

    </div>


</body>
<script>
    $(document).ready(function() {
        $(".logo1").animate({top: '-110%', opacity: 0}, 5000, function(){
            $(".logo1").css({"top":"100%","left":"90%","opacity":"1"});
            $(".logo1").animate({top: '-110%', opacity: 0}, 5000, function(){
                //$(".bodySection").css({"":""});

                $(".bigLogo").show();
                $(".logoDesc").fadeIn();
                $(".bodyAll").css("background-image", "url('img/background-index.png')");

            });
        });
        $(".logo3").animate({top: '-110%', opacity: 0}, 5000, function(){
            $(".logo3").css({"top":"100%","left":"25%","opacity":"1"});
            $(".logo3").animate({top: '-110%', opacity: 0}, 5000);
        });
        
        $(".logo2").animate({top: '110%', opacity: 0}, 5000, function(){
            $(".logo2").css({"top":"-100%","left":"75%","opacity":"1"});
            $(".logo2").animate({top: '110%', opacity: 0}, 5000);
        });
        $(".logo5").animate({top: '110%', opacity: 0}, 5000, function(){
            $(".logo5").css({"top":"-100%","left":"5%","opacity":"1"});
            $(".logo5").animate({top: '110%', opacity: 0}, 5000);
        });
        
    });
</script>
</html>