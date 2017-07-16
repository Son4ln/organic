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
    
    break;
    //sửa châm ngôn layout
   case 'editLine':
    
    break;
    //sửa châm ngôn action
  case 'editLineAction':
   
    break;
    //xóa châm ngôn
  case 'delLine':
   
    break;
	}
?>