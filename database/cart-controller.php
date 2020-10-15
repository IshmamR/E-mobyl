<?php

class Cart {
	public $db = null;

	public function __construct(DBController $db) {
		if (!isset($db->con)) {
			return null;
		}
		$this->db = $db;
	}

	// insert into cart table
	public function insertIntoCart($params=null, $table="cart") {
		if ($this->db->con != null) {
			if ($params != null) {
				// "insert into cart(user_id, item_id)values(5,3)"
				// get table columns
				$columns = implode(',', array_keys($params));
				// print_r($columns);
				$values = implode(',', array_values($params));
				// print_r($values);

				// create sql queries
				$query_string = sprintf("INSERT INTO %s(%s) VALUES (%s)", $table, $columns, $values);
				// echo($query_string);

				$result = $this->db->con->query($query_string);
				// print_r($result);
			}
		}
	}

	public function addToCart($userid, $itemid) {
		if (isset($userid) && isset($itemid)) {
			$params = array(
				'user_id' => $userid,
				'item_id' => $itemid
			);
			$result = $this->insertIntoCart($params);

			if ($result) {
				// reload page
				// header( "Location: {$_SERVER['REQUEST_URI']}", true, 303 );
				// exit();
			}
		}
	}


	// Delete cart item
	public function deleteFromCart($table, $itemid) {
		$result = $this->db->con->query("DELETE FROM $table WHERE item_id=($itemid)");
		return $result;
	}
}