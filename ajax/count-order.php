<?php
	include "../models/connect.php";
	$db = new connect();
	$query = "SELECT COUNT(*) FROM orders WHERE order_status = 0";
	$result = $db -> getInstance($query);

	echo "($result[0]) new";
?>