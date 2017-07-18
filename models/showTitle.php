<?php
	class ShowTitle {
		public function __construct(){

		}
		//phương thức lấy tất cả dữ liệu
		public function getShowTitle (){
			$db = new connect();
			$query = "select * from show_title";
			$result = $db -> getList($query);
			return $result;
		}
		//phương thức lấy 1 dòng dữ liệu bằng id
		public function getShowTitleById($id) {
			$db = new connect();
			$query = "select * from show_title where show_title_id = '$id'";
			$result = $db -> getInstance($query);
			return $result;
		}
		//thêm dữ liệu vào bảng
		public function addShowTitle ($title_id, $product_id){
			$db = new connect();
			$query = "insert into show_title values('','$title_id','$product_id')";
			$db -> exec($query);
		}
		//cập nhật dữ liệu cho bảng
		public function updateShowTitle ($id, $title_id, $product_id) {
			$db = new connect();
			$query = "update show_title set title_id = '$title_id', product_id = '$product_id' where show_title_id = '$id'";
			$db -> exec($query);
		}
		//xóa dữ liệu bảng thông qua id
		public function delShowTitle ($id){
			$db = new connect();
			$query = "delete from show_title where show_title_id ='$id'";
			$db -> exec($query);
		}

		public function delShowTitleByProduct ($id){
			$db = new connect();
			$query = "delete from show_title where product_id ='$id'";
			$db -> exec($query);
		}

		//đếm số hàng theo title_id trong bảng show_title
		public function countShowTitleById($id){
			$db = new connect();
			$query = "select count(title_id) from show_title where title_id = '$id'";
			$result = $db -> getInstance($query);
			return $result;
		}
		
		//đếm số hàng theo title_id trong bảng show_title theo line_id
		public function countShowTitleByIdL($id, $line_id){
			$db = new connect();
			$query = "select count(title_id) from products JOIN show_title ON products.product_id = show_title.product_id where title_id = '$id' and products.product_id in (select product_id from product_line where line_id = '$line_id' group by product_id)";
			$result = $db -> getInstance($query);
			return $result;
		}

		//đếm số hàng theo title_id và brand_id trong bảng show_title
		public function countShowTitleByIdB($id, $brand_id){
			$db = new connect();
			$query = "select count(title_id) from products JOIN show_title ON products.product_id = show_title.product_id where title_id = '$id' and brand_id = '$brand_id'";
			$result = $db -> getInstance($query);
			return $result;
		}
		
		//đếm số hàng theo title_id trong bảng show_title và theo line_id, brand_id
		public function countShowTitleByIdBL($id, $brand_id, $line_id){
			$db = new connect();
			$query = "select count(title_id) from products JOIN show_title ON products.product_id = show_title.product_id where title_id = '$id' and brand_id = '$brand_id' and products.product_id in (select product_id from product_line where line_id = '$line_id' group by product_id)";
			$result = $db -> getInstance($query);
			return $result;
		}

		//đếm số hàng theo title_id và feature_id trong bảng show_title
		public function countShowTitleByIdF($id, $feature_id){
			$db = new connect();
			$query = "select count(title_id) from products JOIN show_title ON products.product_id = show_title.product_id where title_id = '$id' and feature_id = '$feature_id'";
			$result = $db -> getInstance($query);
			return $result;
		}
		
		//đếm số hàng theo title_id trong bảng show_title và theo line_id, feature_id
		public function countShowTitleByIdFL($id, $feature_id, $line_id){
			$db = new connect();
			$query = "select count(title_id) from products JOIN show_title ON products.product_id = show_title.product_id where title_id = '$id' and feature_id = '$feature_id' and products.product_id in (select product_id from product_line where line_id = '$line_id' group by product_id)";
			$result = $db -> getInstance($query);
			return $result;
		}

		//đếm số hàng theo title_id và origin trong bảng show_title
		public function countShowTitleByIdO($id, $origin_id){
			$db = new connect();
			$query = "select count(title_id) from products JOIN show_title ON products.product_id = show_title.product_id where title_id = '$id' and origin_id = $origin_id";
			$result = $db -> getInstance($query);
			return $result;
		}
		
		//đếm số hàng theo title_id trong bảng show_title và theo line_id, origin_id
		public function countShowTitleByIdOL($id, $origin_id, $line_id){
			$db = new connect();
			$query = "select count(title_id) from products JOIN show_title ON products.product_id = show_title.product_id where title_id = '$id' and origin_id = '$origin_id' and products.product_id in (select product_id from product_line where line_id = '$line_id' group by product_id)";
			$result = $db -> getInstance($query);
			return $result;
		}

		//lấy dữ liệu có trong bảng show_title
		public function getShowTitleNew($id, $from, $to) {
			$db = new connect();
			$query = "select * FROM products JOIN show_title ON products.product_id = show_title.product_id where title_id = '$id' ORDER BY show_title_id DESC limit $from, $to";
			$result = $db -> getList($query);
			return $result;
		}
		//Brand - title
		//đếm số lượng sản phẩm theo từng thương hiệu trong bảng products
		public function countProductShowTitleBrandById ($id, $brand_id) {
			$db = new connect();
			$query = "select count(product_id) from  products where product_id in ( select product_id from show_title where title_id = '$id' group by product_id) and brand_id = '$brand_id'";
			$result = $db -> getInstance($query);
			return $result;
		}
		
		//đếm số lượng sản phẩm theo từng thương hiệu trong bảng products
		public function countProductShowTitleBrandByIdL ($id, $brand_id, $line_id) {
			$db = new connect();
			$query = "select count(products.product_id) from  products JOIN product_line ON products.product_id = product_line.product_id where line_id = '$line_id' and products.product_id in ( select product_id from show_title where title_id = '$id' group by product_id) and brand_id = '$brand_id'";
			$result = $db -> getInstance($query);
			return $result;
		}

		//đếm số lượng sản phẩm theo từng tính năng trong bảng products
		public function countProductShowTitleFeatureById ($id, $feature_id) {
			$db = new connect();
			$query = "select count(product_id) from  products where product_id in ( select product_id from show_title where title_id = '$id' group by product_id) and feature_id = '$feature_id'";
			$result = $db -> getInstance($query);
			return $result;
		}
		
		//đếm số lượng sản phẩm theo từng tính năng trong bảng products
		public function countProductShowTitleFeatureByIdL ($id, $feature_id, $line_id) {
			$db = new connect();
			$query = "select count(products.product_id) from  products JOIN product_line ON products.product_id = product_line.product_id where line_id = '$line_id' and  products.product_id in ( select product_id from show_title where title_id = '$id' group by product_id) and feature_id = '$feature_id'";
			$result = $db -> getInstance($query);
			return $result;
		}

		//đếm số lượng sản phẩm theo từng nguồn gốc trong bảng products
		public function countProductShowTitleOriginById ($id, $origin_id) {
			$db = new connect();
			$query = "select count(product_id) from  products where product_id in ( select product_id from show_title where title_id = '$id' group by product_id) and origin_id = '$origin_id'";
			$result = $db -> getInstance($query);
			return $result;
		}
		
		//đếm số lượng sản phẩm theo từng nguồn gốc trong bảng products
		public function countProductShowTitleOriginByIdL ($id, $origin_id, $line_id) {
			$db = new connect();
			$query = "select count(products.product_id) from  products JOIN product_line ON products.product_id = product_line.product_id where line_id = '$line_id' and  products.product_id in ( select product_id from show_title where title_id = '$id' group by product_id) and origin_id = '$origin_id'";
			$result = $db -> getInstance($query);
			return $result;
		}

		//lấy dữ liệu sản phẩm theo từng thương hiệu trong bảng products
		public function getProductShowTitleBrand ($id) {
			$db = new connect();
			$query = "select * from products INNER JOIN show_title ON show_title.product_id = products.product_id INNER JOIN brands ON brands.brand_id = products.brand_id where title_id = '$id' group by products.brand_id";
			$result = $db -> getList($query);
			return $result;
		}
		
		//lấy dữ liệu sản phẩm theo từng thương và line_id hiệu trong bảng products
		public function getProductShowTitleBrandL ($id, $line_id) {
			$db = new connect();
			$query = "select * from products INNER JOIN show_title ON show_title.product_id = products.product_id INNER JOIN brands ON brands.brand_id = products.brand_id where title_id = '$id' and  products.product_id in (select product_id from product_line where line_id = '$line_id' group by product_id) group by products.brand_id";
			$result = $db -> getList($query);
			return $result;
		}

		//lấy dữ liệu sản phẩm theo từng tính năng trong bảng products
		public function getProductShowTitleFeature ($id) {
			$db = new connect();
			$query = "select * from products INNER JOIN show_title ON show_title.product_id = products.product_id INNER JOIN product_features ON product_features.feature_id = products.feature_id where title_id = '$id' group by products.feature_id";
			$result = $db -> getList($query);
			return $result;
		}
		
		//lấy dữ liệu sản phẩm theo từng tính năng và line_id trong bảng products
		public function getProductShowTitleFeatureL ($id, $line_id) {
			$db = new connect();
			$query = "select * from products INNER JOIN show_title ON show_title.product_id = products.product_id INNER JOIN product_features ON product_features.feature_id = products.feature_id where title_id = '$id' and  products.product_id in (select product_id from product_line where line_id = '$line_id' group by product_id) group by products.feature_id";
			$result = $db -> getList($query);
			return $result;
		}

		//lấy dữ liệu sản phẩm theo từng nguồn gốc trong bảng products
		public function getProductShowTitleOrigin ($id) {
			$db = new connect();
			$query = "select * from products INNER JOIN show_title ON show_title.product_id = products.product_id INNER JOIN in_origin ON in_origin.origin_id = products.origin_id where title_id = '$id' group by products.origin_id";
			$result = $db -> getList($query);
			return $result;
		}
		
		//lấy dữ liệu sản phẩm theo từng nguồn gốc và line_id trong bảng products
		public function getProductShowTitleOriginL ($id, $line_id) {
			$db = new connect();
			$query = "select * from products INNER JOIN show_title ON show_title.product_id = products.product_id INNER JOIN in_origin ON in_origin.origin_id = products.origin_id where title_id = '$id' and  products.product_id in (select product_id from product_line where line_id = '$line_id' group by product_id) group by products.origin_id";
			$result = $db -> getList($query);
			return $result;
		}

		//SHOW PRODUCT SELECTED FROM SHOW_TITLE
		//phương thức hiển thị giới hạn sản phẩm trong bảng products và show_title
		public function getProductShowTitleLimit ($id, $from, $to){
			$db = new connect();
			$query = "select * from  products JOIN show_title ON products.product_id = show_title.product_id where title_id = '$id' limit $from, $to";
			$result = $db -> getList($query);
			return $result;
		}
		
		public function getProductShowTitleLimitL ($id, $line_id, $from, $to){
			$db = new connect();
			$query = "select * from  products JOIN show_title ON products.product_id = show_title.product_id where title_id = '$id' and products.product_id in (select product_id from product_line where line_id = '$line_id' group by product_id) limit $from, $to";
			$result = $db -> getList($query);
			return $result;
		}

		//phương thức hiển thị giới hạn sản phẩm trong bảng products và show_title theo brand_id
		public function getProductShowTitleLimitB ($id, $brand_id, $from, $to){
			$db = new connect();
			$query = "select * from  products JOIN show_title ON products.product_id = show_title.product_id where title_id = '$id' and brand_id = $brand_id limit $from, $to";
			$result = $db -> getList($query);
			return $result;
		}
		
		public function getProductShowTitleLimitBL ($id, $brand_id, $line_id, $from, $to){
			$db = new connect();
			$query = "select * from  products JOIN show_title ON products.product_id = show_title.product_id where title_id = '$id' and brand_id = $brand_id and products.product_id in (select product_id from product_line where line_id = '$line_id' group by product_id) limit $from, $to";
			$result = $db -> getList($query);
			return $result;
		}

		//phương thức hiển thị giới hạn sản phẩm trong bảng products và show_title theo feature_id
		public function getProductShowTitleLimitF ($id, $feature_id, $from, $to){
			$db = new connect();
			$query = "select * from  products JOIN show_title ON products.product_id = show_title.product_id where title_id = '$id' and feature_id = $feature_id limit $from, $to";
			$result = $db -> getList($query);
			return $result;
		}
		
		public function getProductShowTitleLimitFL ($id, $feature_id, $line_id, $from, $to){
			$db = new connect();
			$query = "select * from  products JOIN show_title ON products.product_id = show_title.product_id where title_id = '$id' and feature_id = $feature_id and products.product_id in (select product_id from product_line where line_id = '$line_id' group by product_id) limit $from, $to";
			$result = $db -> getList($query);
			return $result;
		}

		//phương thức hiển thị giới hạn sản phẩm trong bảng products và show_title theo origin_id
		public function getProductShowTitleLimitO ($id, $origin_id, $from, $to){
			$db = new connect();
			$query = "select * from  products JOIN show_title ON products.product_id = show_title.product_id where title_id = '$id' and origin_id = $origin_id limit $from, $to";
			$result = $db -> getList($query);
			return $result;
		}
		
		public function getProductShowTitleLimitOL ($id, $origin_id, $line_id, $from, $to){
			$db = new connect();
			$query = "select * from  products JOIN show_title ON products.product_id = show_title.product_id where title_id = '$id' and origin_id = $origin_id and products.product_id in (select product_id from product_line where line_id = '$line_id' group by product_id) limit $from, $to";
			$result = $db -> getList($query);
			return $result;
		}
	}
?>