<?php

function prg() {
	header( "Location: {$_SERVER['REQUEST_URI']}", true, 303 );
	exit();
}

require("database/db_controller.php");

require("database/product_controller.php");

require("database/cart-controller.php");

// DBController object
$db = new DBController();

$product = new Product($db);

// print_r($product->getData());
$products = $product->getData("products");
// print_r($products);

// cart
$cart = new Cart($db);
// $arr = array(
// 	'user_id' => 1,
// 	'item_id' => 2
// );

// $cart->insertIntoCart($arr);

