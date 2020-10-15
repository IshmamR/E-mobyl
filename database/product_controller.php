<?php

class Product {
	public $db = null;

	public function __construct(DBController $db) {
		if (!isset($db->con)) {
			return null;
		}
		$this->db = $db;
	}

	// Fetch product data from mysql
	public function getData($table = null) {
		$result = $this->db->con->query("SELECT * FROM ($table)");
		// echo($table);
		$resultArray = array();

		// fetch product data one by one
		while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$resultArray[] = $item;
		}

		return $resultArray;
	}

	// Fetch users cart
	public function getCartData($table = null, $userid=1) {
		$result = $this->db->con->query("SELECT * FROM ($table) WHERE user_id=($userid)");
		// echo($table);
		$resultArray = array();

		// fetch product data one by one
		while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$resultArray[] = $item;
		}

		$cCount = mysqli_num_rows($result);
		// echo($cCount);

		return array($resultArray, $cCount);
	}

	public function getCartItems($table = null, $itemid) {
		$result = $this->db->con->query("SELECT * FROM ($table) WHERE item_id=($itemid)");
		// echo($table);
		$resultArray = array();
		// fetch product data one by one
		while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$resultArray[] = $item;
		}

		return $resultArray;
	}
}