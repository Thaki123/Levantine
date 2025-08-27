  <?php 
  $page= "showcase";
    $storage = "uploads/gallery/";
    include_once 'backend/albums/includes.php';

    $id = mysqli_real_escape_string($connection, $_GET["id"]);
  include_once "head.php"; 
$page=5; 
  ?>
 
<script>var page ="showcase";</script>
<style>
        .owl-theme .owl-nav.disabled+.owl-dots {
            position: absolute;
            bottom: 30px;
            right: 40px;
        }

        .footerSection {margin:0;position: relative;}
        #myCarousel, #myCarousel div {
            height: 100%;
        }

        .owl-dots {height:20px !important;}
        .bodySection {
            height: calc(100% - 30px);
        }
        .details {
            height: 100%;
        }
        .leftDetails, .rightDetails {
            height: 100%;
        }
        .bodyAll {height:100%;}
        .imageItem img { height:100%; }
        .rightDetails {position:relative;}
        .itemDots {display: block; font-size: 50px;}
    </style>
    <div class="bodyAll">
        <!--style="background-color:#002453;"-->
        <section class="bodySection">
            <div class="details">
                <div class="leftDetails">
                    <div id="myCarousel" class="owl-carousel owl-theme">
                        <?php echo get_gallery($id, $connection); ?>
                    </div>
                </div>
                <div class="rightDetails">
                    <?php echo get_album_details($id, $connection); ?>
                    
                    <div class="bottomShow">
                        <div class="prev"><img src= "img/less.png" alt="<" width="8"/></div>
                        <div class="boxButton">
                            <a href="showcase.php" class="btn btn-sm animated-button thar-three swapedBoxButton">Back to Showcase</a>
                        </div>
                        <div class="next"><img src= "img/greater.png" alt=">" width="8"/></div>
                    </div>
                    <!--<div class="socialShare">
                        <div class="facebook"><a target="_blank" href="http://www.facebook.com/sharer/sharer.php?display=popup&u=http://mazensaliba.com/clients/FYY/levantine/website/showcase-details.php?id=1"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></div>
                        <div class="twitter"><a class="twitter-share-button" target="_blank" href="https://twitter.com/intent/tweet?text=http://mazensaliba.com/clients/FYY/levantine/website/showcase-details.php?id=1"
  data-size="large"><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
                    </div>-->
                </div>
            </div>
        </section>

        <?php include_once "footer.php"; ?>
    </div>
    <script type="text/javascript" language="javascript" src="js/manage.js"></script>
    <script type="text/javascript " language="javascript " src="js/owl.carousel.js "></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                items: 1,
                lazyLoad: true,
                loop: true,
                margin: 10,
                responsiveClass: true
            });

            var owl = $("#myCarousel");
            $('.next').click(function() {
                owl.trigger('next.owl.carousel');
            });
            $('.prev').click(function() {
                owl.trigger('prev.owl.carousel');
            });

        });
    </script>
</body>

</html>