<?php
  switch ($action) {
  	//danh sách hóa đơn
	case 'orderList':
	  include "../views/admin/order/order_list.php";
	break;
	//thêm hóa đơn
	case 'orderAdd':
	  $alert = "";
	   $number = 1;
	  include "../views/admin/order/order_add.php";
	break;
	//thêm hóa đơn Action
	case 'numberToLoop':
	  $alert = "";
      $number = $_POST['numberToLoop'];
	  include "../views/admin/order/order_add.php";
	  break;
	case 'orderAddAction':
	  $order = new Order();
	  $product = new Products();
	  $user = $_SESSION['userId04576'];
	  $orderDate = date('Y/m/d');
      $deliveryDate = "";
      $orderCost = 0;
      $status = 0;
      $order -> addOrder ($user, $orderDate, $deliveryDate, $orderCost, $status);
      $result = $order -> getLatestOrder();
      $cost = 0;
      foreach ($result as $key) {
      	//lấy giá trị order mới nhất
      }
		$productArray = array_combine($_POST['productId'],$_POST['quantity']);
      foreach ($productArray as $key2 => $value) {
      	if($key2 != 0 && $value != 0){
     	  $orderId = $key['order_id'];
          $productId = $key2;
          $quantity = $value;
          $dataProduct = $product -> getProductById($productId);
          $price = $dataProduct['product_price'];
          $discount = $dataProduct['product_discount'];
          if($dataProduct['product_discount'] == 0){
          	$total = $dataProduct['product_price'] * $quantity;
          }else {
          	$total = $dataProduct['product_discount'] * $quantity;
          }
          $order -> addDetail($orderId, $productId, $quantity, $price, $discount, $total);
          $cost += $total;
          $order -> updateOrder ($orderId, $cost);
      	}

      }

      $action = 'orderList';
      $mes = 'Thêm đơn hàng thành công';
      $typeOfMes = 'alert-success';
      redirect($action,$mes,$typeOfMes);

	break;
	//sửa hóa đơn
	case 'orderEdit':

	break;
	//sửa hóa đơn Action
	case 'orderEditAction':

	break;
	//Xóa hóa đơn
	case 'orderDel':
	  $id = $_GET['id'];
	  $order = new Order();
	  $order -> delDetail($id);
	  $order -> delOrder($id);
	  $action = 'orderList';
      $mes = 'Xóa đơn hàng thành công';
      $typeOfMes = 'alert-success';
      redirect($action,$mes,$typeOfMes);
	break;

	case 'orderDetail':
	  $id = $_GET['id'];
	  include "../views/admin/order/order_detail.php";
	break;

	case 'shipping':
		$id = $_GET['id'];
		$delivery = date('Y/m/d');
		$order = new Order();
		$order -> updateShipDate ($id, $delivery);
		$action = 'orderList';
        $mes = 'Đã cập nhập ngày giao hàng';
        $typeOfMes = 'alert-success';
        redirect($action,$mes,$typeOfMes);
		break;

	case 'updateStatus':
		$id = $_GET['id'];
		$status = $_GET['status'];
		$order = new Order();
		$order -> updateStatus($id, $status);
		$action = 'orderList';
        $mes = 'Đã chỉnh sửa trạng thái';
        $typeOfMes = 'alert-success';
        redirect($action,$mes,$typeOfMes);
		break;

	}


?>