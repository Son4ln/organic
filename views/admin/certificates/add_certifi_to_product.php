<?php include '../views/admin/header.php'; ?>
<?php include '../views/admin/nav.php'; ?>
    <!-- container here -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Certificate to Products
                        <small>Add</small>
                    </h1>
                </div>
                <div class="col-lg-12">
                    <div class="alert" id="showMes"></div>
                </div>
                <div class="col-lg-12">
                    <?php echo $alert; ?>
                </div>
                    <!-- /.col-lg-12 -->
                <?php
                  $certif = new Certificates();
                  $data = $certif -> getCertificates();
                  $product = new Products();

                ?>
                <div class="col-lg-7" style="padding-bottom:120px">
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
                                <button type="button" onclick="certifMoreProduct()" id="add-form" class="btn btn-primary">Thêm</button>
                        </div>
                        <button type="submit" name="brandUpload" class="btn btn-primary">Thêm sản phẩm</button>
                        <a onclick="goback()" class="btn btn-default">Cancel</a>
                    <form>

                </div>
            </div>
                <!-- /.row -->
        </div>
            <!-- /.container-fluid -->
    </div>
        <!-- /#page-wrapper -->

    <!-- end container -->
<?php include '../views/admin/footer.php'; ?>

