<?php 
$page= "showcase";
$storage = "uploads/albums/";
include_once 'backend/albums/includes.php';

include_once "head.php"; ?>
<script>var page ="showcase";</script>
<div class="bodyAll">
	<?php include_once "menu.php"; ?>
	<section class="headerSection">
		<?php include_once "header.php"; ?>

		<div class="pageHeading wow fadeInUp" data-wow-delay=".3s">
			<h1>OUR SHOWCASE</h1>
		</div>

		<div class="pageTitle wow fadeInUp" data-wow-delay=".6s">
			<h2>we inspire brands & bring <br/>their unique designs to life.</h2>
		</div>

		<div class="pageDots wow fadeInUp" data-wow-delay=".8s">...</div>
	</section>
	<!--style="background-color:#002453;"-->
	<section class="bodySection wow fadeInUp" data-wow-delay=".9s">
		<div class="masonry">

			<!--<div class="item" style="background-image: url('img/exotica-small.jpg');">
				<a href="showcase-details.php?id=1">
					<img src="img/exotica-small.jpg" title="Exotica" alt="Exotica" />
					<!--<img src="img/exotica-small.jpg" title="Exotica" alt="Exotica" class="imageLarger" />
					<div class="layer"></div>
					<div class="itemDetails">
						<div class="itemName">ANDREA WAZEN</div>
						<div class="itemTitle">Hard Cardboard Shoe Boxes</div>
					</div>
				</a>
			</div>-->


			<?php echo get_masonry($connection); ?>

			
			<!--<div class="item" style="background-image: url('img/leather.jpg');">
				<a href="showcase-details.php?id=1">
					<img src="img/leather.jpg" title="Exotica" alt="Exotica" />
					<div class="layer"></div>
					<div class="itemDetails">
						<div class="itemName">ANDREA WAZEN</div>
						<div class="itemTitle">Hard Cardboard Shoe Boxes</div>
					</div>
				</a>
			</div>


			<div class="item" style="background-image: url('img/jewl.jpg');">
				<a href="showcase-details.php?id=1">
					<img src="img/jewl.jpg" title="Exotica" alt="Exotica" />
					<div class="layer"></div>
					<div class="itemDetails">
						<div class="itemName">ANDREA WAZEN</div>
						<div class="itemTitle">Hard Cardboard Shoe Boxes</div>
					</div>
				</a>
			</div>


			<div class="item" style="background-image: url('img/sibline.jpg');">
				<a href="showcase-details.php?id=1">
					<img src="img/sibline.jpg" title="Exotica" alt="Exotica" />
					<div class="layer"></div>
					<div class="itemDetails">
						<div class="itemName">ANDREA WAZEN</div>
						<div class="itemTitle">Hard Cardboard Shoe Boxes</div>
					</div>
				</a>
			</div>


			<div class="item" style="background-image: url('img/nemer-saade.jpg');">
				<a href="showcase-details.php?id=1">
					<img src="img/nemer-saade.jpg" title="Exotica" alt="Exotica" />
					<div class="layer"></div>
					<div class="itemDetails">
						<div class="itemName">ANDREA WAZEN</div>
						<div class="itemTitle">Hard Cardboard Shoe Boxes</div>
					</div>
				</a>
			</div>


			<div class="item" style="background-image: url('img/golden.jpg');">
				<a href="showcase-details.php?id=1">
					<img src="img/golden.jpg" title="Exotica" alt="Exotica" />
					<div class="layer"></div>
					<div class="itemDetails">
						<div class="itemName">ANDREA WAZEN</div>
						<div class="itemTitle">Hard Cardboard Shoe Boxes</div>
					</div>
				</a>
			</div>


			<div class="item" style="background-image: url('img/delivery.jpg');">
				<a href="showcase-details.php?id=1">
					<img src="img/delivery.jpg" title="Exotica" alt="Exotica" />
					<div class="layer"></div>

					<div class="itemDetails">
						<div class="itemName">ANDREA WAZEN</div>
						<div class="itemTitle">Hard Cardboard Shoe Boxes</div>
					</div>
				</a>
			</div>


			<div class="item" style="background-image: url('img/andera-wazen.jpg');">
				<a href="showcase-details.php?id=1">
					<img src="img/andera-wazen.jpg" title="Exotica" alt="Exotica" />
					<div class="layer"></div>
					<div class="itemDetails">
						<div class="itemName">ANDREA WAZEN</div>
						<div class="itemTitle">Hard Cardboard Shoe Boxes</div>
					</div>
				</a>
			</div>-->

		</div>
	</section>

	<?php include_once "footer.php"; ?>
</div>
<script>
	$(document).ready(function() {

		
		var width = $(window).width();
		$(".masonry").css("column-count", "2");
		if (width < 580) {
			$(".masonry").css("column-count", "1");
		}

		$(".item").hover(function() {
			$(this).find(".layer").fadeIn();
			
			// $(this).find(".itemDetails .itemName").fadeIn( 100, function() {
			// 	$(this).parent().find(".itemTitle").fadeIn(500);
			//   });
			$(this).find(".itemDetails .itemName").fadeIn();
			$(this).find(".itemDetails .itemTitle").fadeIn();
			$(this).find(".itemDetails .itemDots").fadeIn();
			  $(this).find("img").css({"opacity":"0"});
		}, function() {
			$(this).find("img").css({"opacity":"1"});
			$(".itemDetails .itemTitle").hide();
			$(".itemDetails .itemName").hide();
			$(this).find(".itemDetails .itemDots").hide();
			$(".layer").hide();
		});

		// $(".item").hover(function() {
		// 	$(this).children(".layer").fadeIn();
			
		// 	$(this).find(".itemDetails .itemName").fadeIn( 500, function() {
		// 		$(this).parent().find(".itemTitle").fadeIn(500);
		// 	  });
		// }, function() {
		//     $(".itemDetails .itemTitle").hide();
		// 	$(".itemDetails .itemName").hide();
		// 	$(".layer").hide();
		// });
		
		setTimeout(function(){$(".headerSection").css({ "background-image": 'url("img/background-about-1.png")' }); }, 1400);   
		 
	});
</script>
<style>
.bodySection {box-shadow: 0 0 7px 1px #888888;}
/*.bodyAll {background-image: url("img/background-showcase.png"); background-repeat: no-repeat;}*/
.pageTitle h2 {background-color: transparent;}
.footerSection { margin: 0;}
/*.item img:hover {opacity: 0;}*/
</style>
</body>

</html>