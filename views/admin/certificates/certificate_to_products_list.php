<?php include '../views/admin/header.php'; ?>
<?php include '../views/admin/nav.php'; ?>
    <!-- container here -->
    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Certificates and Products come with
                            <small>List</small>
                        </h1>
                    </div>
                    <div class="col-lg-12">
                        <div class="alert" id="showMes"></div>
                    </div>

                    <?php
                        $certifi = new Certificates();
                        $data = $certifi -> getProductByCertifId ($id);
                        $product = new Products();

                    ?>
                    <a style="margin: 0 0 40px 0" href="?action=certifList" class="btn btn-success">Back to List</a>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Tên Chứng Nhận</th>
                                <th>Thao Tác</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php if(empty($data)){
                                } else { foreach ($data as $key) {
                             ?>
                            <tr class="odd gradeX" align="center">
                                <td><?php echo $key['show_id']; ?></td>
                                <td><?php
                                  $resultProduct = $product -> getProductById($key['product_id']);
                                echo $resultProduct['product_name'];
                                ?></td>
                                <td><?php
                                $result = $certifi -> getCertificateById($key['certificate_id']);
                                echo $result['certificate_name'];
                                ?></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return delConfirm('Bạn có chắc muốn xóa chứng nhận đi kèm với sản phẩm này')" href="?action=certificateAndProductDel&id=<?php echo $key['show_id']; ?>&certifId=<?php echo $id; ?>"> Delete</a></td>
                            </tr>
                            <?php } } ?>
                            </tbody>
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Certificate to Products
                            <small>Add</small>
                        </h1>
                    </div>
                    <div class="col-lg-6" style="padding-bottom:120px">
                    <form action="?action=addCertifToProductAction" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="hidden" name="certif-id" value="<?php echo $id; ?>">
                            <label>Sản Phẩm</label>
                            <select class="form-control" name="prodId[]">
                                <option value="0">Chưa chọn sản phẩm</option>
                                <?php
                                $dataProducts = $product -> getProducts();
                                foreach ($dataProducts as $value) {
                                    # code...
                                 ?>
                                <option value="<?php echo $value['product_id']; ?>"> <?php echo $value['product_name']; ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div id="append-here">

                        </div>
                        <div class="form-group">
                                <button type="button" onclick="certifMoreProduct();" id="add-form" class="btn btn-primary">Thêm</button>
                        </div>
                        <button type="submit" name="brandUpload" class="btn btn-primary">Thêm sản phẩm</button>
                        <a onclick="goback()" class="btn btn-default">Cancel</a>
                    <form>

                </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    <!-- end container -->
<?php include '../views/admin/footer.php'; ?>