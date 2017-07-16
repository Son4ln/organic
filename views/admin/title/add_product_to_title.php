<?php include '../views/admin/header.php'; ?>
<?php include '../views/admin/nav.php'; ?>
    <!-- container here -->
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product to Title
                            <small>Add</small>
                        </h1>
                    </div>
                    <div class="col-lg-12">
                        <?php echo $alert; ?>
                    </div>
                    <!-- /.col-lg-12 -->

                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="?action=addProductToTitleAction&id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">
                            <?php $product = new Products(); ?>
                            <div class="form-group">
                                <label>Sản phẩm</label>
                                <select class="form-control" name="productId[]">
                                    <option value="0">Chưa chọn sản phẩm</option>
                                    <?php
                                        $data = $product -> getProducts();
                                        foreach ($data as $key) {
                                     ?>

                                    <option value="<?php echo $key['product_id']; ?>">
                                        <?php echo $key['product_name']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div id="append-more-product-here">

                            </div>
                            <div class="form-group"><button type="button" onclick="titleMoreProduct()" id="add-more-product" class="btn btn-primary">Thêm</button></div>
                            <button type="submit" class="btn btn-primary">Thêm Sản Phẩm</button>
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
