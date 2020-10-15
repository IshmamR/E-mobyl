<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("assets/includes/meta.php"); ?>

	<?php include("assets/includes/head-links.php"); ?>
</head>
<?php
	if (isset($_GET['item'])) {
		$id = $_GET['item']; // product id from get request
	}
?>
<body>
	<?php include("assets/includes/header.php"); ?>

	<main id="main-sec">
	<?php foreach ($products as $item): ?>
		<?php if ($item['item_id'] == $id): ?>
				
		<section id="product" class="py-3">
			<div class="container">
				<div class="row">
					<!-- Image and buttons -->
					<div class="col-sm-6">
						<img src="<?php echo($item['item_image']);?>" class="w-100 mb-5 mt-2" />
						<div class="d-flex flex-row justify-content-center">
							<button class="btn btn-success rounded-0 mr-3" type="submit">
								<i class="far fa-credit-card"></i> Procced to Buy
							</button>
							<!-- ADD TO CART -->
							<form method="post">
								<input type="hidden" name="item_id" value="<?php echo($item['item_id']); ?>">
								<input type="hidden" name="user_id" value="<?php echo(1); ?>">
								<button type="submit" name="product_submit" class="btn btn-primary rounded-0">
									<i class="fas fa-cart-plus"></i> Add to Cart
								</button>
							</form>
						</div>
					</div>
					<!-- __Image and buttons__ -->

					<!-- Colors and quantity -->
					<div class="col-sm-6 py-4">
						<h3><?php echo($item['item_name']); ?></h3>
						<small>By <?php echo(ucfirst($item['item_brand'])); ?></small>
						<div class="d-flex flex-wrap">
							<div class="rating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="far fa-star"></i>
							</div>
							<a href="#" class="text-decoration-none px-sm-2">20,345 ratinsgs | 10,000+ answered question</a>
						</div>
						<hr class="m-0">
						<!-- product price section -->
						<table class="my-3">
							<tr class="table-row">
								<td>M.R.P. </td>
								<td><strike>$<?php echo(($item['item_price']+30)); ?></strike></td>
							</tr>
							<tr class="table-row">
								<td>Deal price </td>
								<td class="h4">
									$<span class="text-primary"><?php echo($item['item_price']); ?></span>
									<small class="h6 text-muted">&nbsp;&nbsp;Including taxes</small>
								</td>
							</tr>
							<tr class="table-row">
								<td>You save </td>
								<td class="h5">
									$<span class="text-success"><?php echo(30); ?></span>
								</td>
							</tr>
						</table>
						<!-- product price section -->

						<!-- Product Policy -->
						<div id="policy">
							<div class="d-flex flex-wrap justify-content-around text-info">
								<div class="return text-center">
									<div class="mx-2">
										<span class="fas fa-retweet fa-lg border rounded-pill p-3"></span><br>
										<a href="#" class="text-decoration-none">10 days<br>Replacement</a>
									</div>
								</div>
								<div class="return text-center">
									<div class="mx-2">
										<span class="fas fa-truck fa-lg border rounded-pill p-3"></span><br>
										<a href="#" class="text-decoration-none">Daily tution<br>Delivered</a>
									</div>
								</div>
								<div class="return text-center">
									<div class="mx-2">
										<span class="fas fa-check-double fa-lg border rounded-pill p-3"></span><br>
										<a href="#" class="text-decoration-none">1 year(s)<br>Warranty</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Product Policy END -->
						<hr class="my-1">
						<!-- Order details -->
						<div id="order-details" class="text-dark">
							<small>Delivery by: Nov 15 - Dec 15</small><br>
							<small>Sold by <a href="#">Daily Electronics</a>(4.5 out of 5 | 18,999 ratings)</small><br>
							<small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 42069</small>
						</div>
						<!-- Order details END -->

						<div class="row">
							<!-- color -->
							<div class="col-lg-6 col-8">
								<div class="colors d-flex flex-row justify-content-between align-items-center my-3">
									<h6>Colors:</h6>
									<div class="color rounded-circle bg-primary p-3"></div>
									<div class="color rounded-circle bg-dark p-3"></div>
									<div class="color rounded-circle bg-info p-3"></div>
								</div>
							</div>
							<!-- color end -->
							<div class="col-lg-6 col-7">
								<div class="qty d-flex align-items-center my-3">
									<h6>Quantity:&nbsp;</h6>
									<button class="qty_up btn btn-sm border" data-id="product"><i class="fas fa-angle-up"></i></button>
									<input class="qty_input w-25 border bg-white px-2" data-id="product" type="text" name="" value="1" disabled>
									<button class="qty_down btn btn-sm border" data-id="product"><i class="fas fa-angle-down"></i></button>
								</div>
							</div>
						</div>

						<!-- RAM size -->
						<div class="size my-2">
							<h6>RAM: </h6>
							<div class="w-100 d-flex flex-row flex-wrap justify-content-start mr-0">
								<button class="btn border bg-white rounded-0 shadow-sm mr-1">4GB</button>
								<button class="btn border bg-white rounded-0 shadow-sm mr-1">6GB</button>
								<button class="btn border bg-white rounded-0 shadow-sm">8GB</button>
							</div>
						</div>
						<!-- RAM size END -->
					</div>
					<!-- __Colors and quantity__ -->

					<!-- product description -->
					<div class="col-12 px-5 my-3">
						<h5>Product description:</h5>
						<hr class="m-0">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas nostrum magni amet necessitatibus suscipit fugiat quae ipsa fugit, similique cupiditate doloremque.</p>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Distinctio placeat beatae, aliquam aspernatur ea necessitatibus numquam qui, ad laudantium facilis debitis praesentium perspiciatis velit quos tempore, esse totam dicta iure!</p>
					</div>
					<!-- __product description__ -->
				</div>
			</div>
		</section>
		<?php endif ?>
	<?php endforeach ?>

		<!-- Top sales section -->
		<?php include("templates/_top-sales.php"); ?>
		<!-- Top sales section END -->

	</main>

	<?php include("assets/includes/footer.php"); ?>

	<script src="https://kit.fontawesome.com/e36cbd79af.js" crossorigin="anonymous"></script>
	<script src="assets/fw/owlcarousel/owl.carousel.min.js"></script>
	<script src="js/main.js" defer></script>
	<script src="js/cart.js"></script>
</body>
</html>