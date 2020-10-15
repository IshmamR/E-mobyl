<?php
	$cArray = $product->getCartData("cart");
?>
<header id="header">
		<div class="d-flex justify-content-between align-items-center px-3 py-1">
			<p class="mb-0">NabinBagh, Dhaka-1217, Bangladesh</p>
			<div class="text-center d-flex flex-row align-items-center">
				<a href="#" class="text-dark border-right border-left px-lg-3 px-1">Login</a>
				<a href="#" class="text-dark border-right px-lg-3 px-1">Signup</a>
			</div>
		</div>
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary text-white">
			<a class="navbar-brand" href="<?php echo(BASE_URL); ?>">E-Mobyl</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">On Sale<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Category</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" href="#">Products</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" href="#">Blog</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" href="#">Coming Soon</a>
					</li>
				</ul>
				<div class="my-2 my-lg-0">
					<a href="cart.php" class="py-2 pl-2 rounded-pill bg-success">
						<span class="px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
						<span class="px-3 py-2 text-dark bg-light rounded-pill"><?php echo(count($cArray[0])); ?></span>
					</a>
				</div>
			</div>
		</nav>
	</header>