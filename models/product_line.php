<?php
	class ProductLine{

		function __construct()
		{

		}
		/* LinesProducts */
		public function getLinesProducts (){
			$db = new connect();
			$query = "select * from lines_products";
			$result = $db -> getList($query);
			return $result;
		}
		
		public function createLinesProducts($line_name, $compact){
			$db = new connect();
			$query = "INSERT INTO lines_products VALUES ('','$line_name','$compact')";
			$db->exec($query);     
		}
		
		function getLinesProductsById($line_id){
			$db = new connect();
			$query = "select * from lines_products where line_id = '$line_id'";
			$result = $db -> getInstance($query);
			return $result;
		}
		
		public function updateLinesProducts ($line_id, $line_name, $compact){
			$db = new connect();
			$query = "update lines_products set line_name = '$line_name', compact = '$compact'  where line_id = '$line_id'";
			$db -> exec($query);
		}

		function delLinesProducts($line_id){
			$db = new connect();
			$query = "delete from lines_products where line_id ='$line_id'";
			$db -> exec($query);
		}
		/* End LinesProducts */
		
		/* ProductLine */
		public function getProductLine (){
			$db = new connect();
			$query = "select * from product_line";
			$result = $db -> getList($query);
			return $result;
		}
		
		public function createProductLine($line_id, $product_id){
			$db = new connect();
			$query = "INSERT INTO product_line VALUES ('','$line_id','$product_id')";
			$db->exec($query);     
		}
		
		function getProductLineById($product_line_id){
			$db = new connect();
			$query = "select * from product_line where product_line_id = '$product_line_id'";
			$result = $db -> getInstance($query);
			return $result;
		}
		
		public function updateProductLine ($product_line_id, $line_id, $product_id){
			$db = new connect();
			$query = "update product_line set line_id = '$line_id', product_id = '$product_id'  where product_line_id = '$product_line_id'";
			$db -> exec($query);
		}

		function delProductLine($product_line_id){
			$db = new connect();
			$query = "delete from product_line where product_line_id ='$product_line_id'";
			$db -> exec($query);
		}
		/* End ProductLine */
	}
?>