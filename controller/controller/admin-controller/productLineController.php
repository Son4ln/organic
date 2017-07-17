<?php
	switch ($action) {
	   // danh sách châm ngôn
  case 'listLine':
    include "../views/admin/product_line/line_list.php";
    break;
    //thêm châm ngôn layout
  case 'addLine':
    $alert = "";
    include "../views/admin/product_line/line_add.php";
    break;
    //thêm trâm ngôn action
  case 'addLineAction':
    if (!empty($_POST['lineName']) && !empty($_POST['character'])){

      $linesName = $_POST['lineName'];
      $char = $_POST['character'];
      $lines = new ProductLine();
      $lines -> createLinesProducts($linesName, $char);
      $mes = "Thêm Product line thành công";
      $action = 'listLine';
      $typeOfMes = 'alert-success';
      redirect($action,$mes,$typeOfMes);

    }else {
      $alert = "Vui lòng nhập tên dòng sản phẩm và ký hiệu";
      include "../views/admin/product_line/line_add.php";
    }
    break;
    //sửa châm ngôn layout
   case 'editLine':
    $alert = '';
    $lineId = $_GET['id'];
    include "../views/admin/product_line/line_edit.php";
    break;
    //sửa châm ngôn action
  case 'editLineAction':
    if(!empty($_POST['lineName']) && !empty($_POST['character'])){
      $lines = new ProductLine();
      $lineId = $_POST['lId'];
      $lineName = $_POST['lineName'];
      $character = $_POST['character'];
      $lines -> updateLinesProducts($lineId, $lineName, $character);
      $mes = "Sửa Product line thành công";
      $action = 'listLine';
      $typeOfMes = 'alert-success';
      redirect($action,$mes,$typeOfMes);
    } else {
      $alert = 'Vui lòng nhập tên dòng sản phẩm và ký hiệu';
      $lineId = $_POST['lId'];
      include "../views/admin/product_line/line_edit.php";
    }
    
    break;
    //xóa châm ngôn
  case 'delLine':
    try {
      $id = $_GET['id'];
      $lines = new ProductLine();
      $lines -> delLinesProducts($id);
      $mes = "Xóa Product line thành công";
      $action = 'listLine';
      $typeOfMes = 'alert-success';
      redirect($action,$mes,$typeOfMes);
    }catch (PDOException $e) { 
      $mes = "Bạn không thế xóa product line, có sản phẩm đã liên kết với Product line này";
      $action = 'listLine';
      $typeOfMes = 'alert-danger';
      redirect($action,$mes,$typeOfMes);
    }
    
    break;
	}
?>