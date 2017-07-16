<?php
	switch ($action) {
	  // danh sách banner
  case 'originList':
    include "../views/admin/origin/origin_list.php";
    break;
    // thêm banner layout
  case 'originAdd':
    $alert = "";
    include "../views/admin/origin/origin_add.php";
    break;
    // thêm banner action
  case 'originAddAction':
      if($_POST['origin'] == ""){
        $alert = "Vui lòng nhập Origin";
        include "../views/admin/origin/origin_add.php";
        break;
      }

      $originName = $_POST['origin'];
      $origin = new Origin();
      $origin -> addOrigin($originName);
      $mes = "Thêm Origin thành công";
      $action = 'originList';
      $typeOfMes = 'alert-success';
      redirect($action,$mes,$typeOfMes);
      break;
      //Sửa banner layout
  case 'originEdit':
    $alert = '';
    $originId = $_GET['id'];
    include "../views/admin/origin/origin_edit.php";
    break;
    //sửa banner action
  case 'originEditAction':
    if($_POST['originName'] == ""){
      $originId = $_POST['originId'];
      $alert = 'Vui lòng nhập Origin';
      include "../views/admin/origin/origin_edit.php";
      break;
    }

    $origin = new Origin();
    $originId = $_POST['originId'];
    $originName = $_POST['originName'];
    $origin -> updateOrigin($originId, $originName);
    $mes = "Sửa Origin thành công";
    $action = 'originList';
    $typeOfMes = 'alert-success';
    redirect($action,$mes,$typeOfMes);
    break;
    //xóa banner
  case 'originDel':
    try {
      $id = $_GET['id'];
      $origin = new Origin();
      $origin -> delOrigin($id);
      $mes = "Xóa Origin thành công";
      $action = 'originList';
      $typeOfMes = 'alert-success';
      redirect($action,$mes,$typeOfMes);
    } catch (PDOException $e) {
      $mes = "Bạn không thể xóa Origin, có sản phẩm đang sử dụng origin này";
      $action = 'originList';
      $typeOfMes = 'alert-danger';
      redirect($action,$mes,$typeOfMes);
    }
    break;
	}
?>