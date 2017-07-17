<?php include '../views/admin/header.php'; ?>
<?php include '../views/admin/nav.php'; ?>
    <!-- container here -->
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">View Products Lines
                            <small>List</small>
                        </h1>
                    </div>
                    <div class="col-lg-12">
                        <div class="alert" id="showMes"></div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <h3 class="text-center">
                            Sản phẩm : 
                            <?php 
                                $product = new Products();
                                $productName = $product -> getProductById($id);
                                echo $productName['product_name'];
                            ?>
                            </h3>
                            
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Ký hiệu</th>
                                <th>Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $line = new ProductLine();
                                $data = $line -> getProductLineByProductId($id);
                                if(empty($data)){

                                }else{
                                foreach ($data as $key) {

                            ?>
                            <tr class="odd gradeX" align="center">
                                <td><?php echo $key['product_line_id']; ?></td>
                                <td>

                                <?php 
                                $lineName = $line -> getLinesProductsById($key['line_id']);
                                echo $lineName['line_name']; 

                                ?>
                                    

                                </td>
                                <td><?php echo $lineName['compact']; ?></td>

                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return delConfirm('Bạn có chắc muốn xóa Product line này')" 
                                href="?action=delProductLine&id=<?php echo $key['product_line_id']; ?>&productId=<?php echo $id; ?>"> 
                                Delete</a>
                            </tr>
                            <?php } }?>
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    <!-- end container -->
<?php include '../views/admin/footer.php'; ?>
