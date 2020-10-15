<?php

	shuffle($products);

	// Product page
	if (isset($_POST['product_submit'])) {
		$cart->addToCart($_POST['user_id'], $_POST['item_id']);
		prg();
	}

	// top sales
	if (isset($_POST['top_sale_submit'])) {
		$cart->addToCart($_POST['user_id'], $_POST['item_id']);
		prg();
	}

	// new phones
	if (isset($_POST['new_phone_submit'])) {
		$cart->addToCart($_POST['user_id'], $_POST['item_id']);
		prg();
	}

	// special-prices
	if (isset($_POST['sp_price_submit'])) {
		$cart->addToCart($_POST['user_id'], $_POST['item_id']);
		prg();
	}

	
