<?php include '../views/admin/header.php'; ?>
<?php include '../views/admin/nav.php'; ?>
    <!-- container here -->
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Order
                            <small>Add</small>
                        </h1>
                    </div>
                    <div class="col-lg-12">
                        <?php echo $alert; ?>
                    </div>
                    <!-- /.col-lg-12 -->

                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="?action=orderAddAction" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Sản phẩm</label>
                                <select class="form-control" name="productId[]">
                                    <option value="0">Chưa chọn sản phẩm</option>
                                    <?php
                                        $product = new Products();
                                        $data = $product -> getProducts();
                                        foreach ($data as $key) {
                                     ?>

                                    <option value="<?php echo $key['product_id']; ?>">
                                        <?php echo $key['product_name']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Số lượng</label>
                                <input class="form-control" type="number" name="quantity[]" value="1" placeholder="Nhập số lượng" />
                            </div>
                            <div id="append-order-here">

                            </div>
                            <div class="form-group">
                                <button type="button" onclick="orderMoreProduct();" id="add-order" class="btn btn-primary">Thêm</button>
                            </div>
                            <button type="submit" class="btn btn-primary">Thêm hóa đơn</button>
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
