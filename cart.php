<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("assets/includes/meta.php"); ?>

	<?php include("assets/includes/head-links.php"); ?>
</head>

<!-- DELETE FROM CART FUNCTION -->
<?php
	if (isset($_POST['deleteItem'])) {
		$deleted = $cart->deleteFromCart("cart", $_POST['itemId']);
		// $deleted = 0;
		if ($deleted) {
			header( "Location: {$_SERVER['REQUEST_URI']}", true, 303 );
			exit();
		} else {
			echo "<script>";
			echo "alert(`Error deleting this item-.-''`)";
			echo "</script>";
		}
	}
?>

<body>
	<?php 
		include("assets/includes/header.php");
	?>

	<main id="main-sec">
		<!-- Cart descriptions -->
		<section id="cart" class="container py-3">
			<div class="">
				<h4>Shopping Cart</h4>
				<hr class="my-1">
			</div>
			<div class="row">
				<!-- Shopping cart items -->
				<div class="col-lg-8 col-12 d-flex flex-column">
				<?php
					$arr = $product->getCartData("cart"); // $arr = array(items, count)
					$totalPrice = 0;
					if ($arr[1] == 0) { // if cart is empty
					 	echo("<div class='d-flex h-100 align-items-center'><h1>Sowwy, you have 0 items in your cart. ;_;</h1></div>");
					} else { // if cart is not empty
						foreach ($arr[0] as $item):
						$cartItems = $product->getCartItems("products", $item['item_id']);
						$cartItem = $cartItems[0];
						$totalPrice += $cartItem['item_price'];
				?>
					<div class="cart-item">
						<div class="d-flex flex-row flex-wrap align-items-center border-bottom">
							<img class="col-md-4 col-12" src="<?php echo($cartItem['item_image']); ?>">
							<div class="pt-0">
								<h5 class="mb-1"><?php echo($cartItem['item_name']); ?></h5>
								<small>By <?php echo($cartItem['item_brand']); ?></small><br>
								<h4 class="my-1">$<span class="text-success"><?php echo($cartItem['item_price']); ?></span></h4>
								<i class="fas fa-star text-primary"></i>
								<i class="fas fa-star text-primary"></i>
								<i class="fas fa-star text-primary"></i>
								<i class="fas fa-star text-primary"></i>
								<i class="far fa-star text-primary"></i>
								<a href="#" class="text-decoration-none text-info">&nbsp;20,369 ratings</a>
								<br>
								<div class="qty d-flex flex-wrap align-items-center">
									<!-- <button class="qty_up btn btn-sm border" data-id="pro1"><i class="fas fa-angle-up"></i></button>
									<input class="qty_input border bg-white px-2" data-id="pro1" style="width:2rem" type="text" name="" value="1" disabled>
									<button class="qty_down btn btn-sm border" data-id="pro1"><i class="fas fa-angle-down"></i></button> -->
									<form method="post">
										<input type="hidden" name="itemId" value="<?php echo($cartItem['item_id']); ?>">
										<button class="btn btn-danger rounded-0 px-3 py-1 my-2" name="deleteItem" type="submit">Delete</button>
									</form>
									<!-- <button class="text-white bg-info my-2">Save for later</button> -->
								</div>
							</div>
						</div>
					</div>	
				<?php endforeach; }?>
				</div>
				<!-- Shopping cart items -->

				<!-- Sub total section -->
				<div class="col-lg-4 col-12 my-2">
					<div class="sub-total">
						<p class="text-success border border-success px-2"><i class="fas fa-check"></i> Your order is eligible for FREE delivery.</p>

					<?php if ($arr[1] != 0) : // proceed to chheckout only if item exists in cart ?>
						<h5>
							Sub total:&nbsp;&nbsp;<span id="deal-item"><?php echo($arr[1]); ?></span> item(s)<br>$<span id="deal-price" class="text-primary h4"><?php echo($totalPrice); ?></span>
						</h5>
						<div class="">
							<button class="btn btn-success rounded-0 shadow-sm my-2" type="submit">
								<i class="far fa-credit-card"></i> Proceed to Buy
							</button>
						</div>
					<?php else: ?>
						<h5>
							Sub total:&nbsp;&nbsp;<span id="deal-item"><?php echo($arr[1]); ?></span> item(s)<br>$<span id="deal-price" class="text-primary h4"><?php echo($totalPrice); ?></span>
						</h5>
						<div class="">
							<button class="btn btn-success rounded-0 shadow-sm my-2 btn-disabled" disabled>
								<i class="far fa-credit-card"></i> Proceed to Buy
							</button>
						</div>
						<?php endif; ?>
					</div>
				</div>
				<!-- __Sub total section__ -->
			</div>
		</section>
		<!-- Cart descriptions -->

		<!-- New Phones Section -->
		<?php include("templates/_new-phones.php"); ?>
		<!-- New Phones END -->
	</main>

	<?php include("assets/includes/footer.php"); ?>

	<script src="https://kit.fontawesome.com/e36cbd79af.js" crossorigin="anonymous" defer></script>
	<script src="assets/fw/owlcarousel/owl.carousel.min.js"></script>
	<script src="js/main.js" defer></script>
</body>
</html>