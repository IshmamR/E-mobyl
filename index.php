<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("assets/includes/meta.php"); ?>

	<?php include("assets/includes/head-links.php"); ?>
</head>

<body>
	
	<?php 
		include("assets/includes/header.php");
	?>

	<main id="main-sec">
		<!-- Banner section start -->
		<?php include("templates/_banners.php"); ?>
		<!-- Banner section end -->

		<!-- Top sales section -->
		<?php include("templates/_top-sales.php"); ?>
		<!-- Top sales section END -->

		<!-- Special Price section -->
		<?php include("templates/_special-prices.php"); ?>
		<!-- Special Price section End -->

		<!-- Banner Ads section -->
		<?php include("templates/_banner-ads.php"); ?>
		<!-- Banner Ads section END -->

		<!-- New Phones Section -->
		<?php include("templates/_new-phones.php"); ?>
		<!-- New Phones END -->

		<!-- Latest Blog section -->
		<?php include("templates/_latest-blogs.php"); ?>
		<!-- Latest Blog section END -->
	</main>

	<?php include("assets/includes/footer.php"); ?>

	<script src="https://kit.fontawesome.com/e36cbd79af.js" crossorigin="anonymous" defer></script>
	<script src="assets/fw/owlcarousel/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/cart.js"></script>

	<!-- ISOTOPE JS -->
	<script src="assets/fw/isotope.pkgd.min.js"></script>
	<script>
		var $grid = $('#myTabContent').isotope({
			itemSelector: '.item',
			layoutMode: 'fitRows'
		});
		$('.nav-tabs').on( 'click', 'a', function() {
			var filterValue = $( this ).attr('data-filter');
			$grid.isotope({ filter: filterValue });
		});
	</script>
</body>
</html>