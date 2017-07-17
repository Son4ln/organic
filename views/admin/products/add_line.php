<?php include '../views/admin/header.php'; ?>
<?php include '../views/admin/nav.php'; ?>
    <!-- container here -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Product Line to Product
                        <small>Add</small>
                    </h1>
                </div>
                <div class="col-lg-12">
                    <div style="display: none;" id="alert-mes" class="alert alert-danger"></div>
                </div>
                <div class="col-lg-12">
                    <?php echo $alert; ?>
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
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="?action=addProductLineAction&id=<?php echo $id; ?>" method="POST">
                        <div class="form-group">
                            <input class="form-control" name="productId" type="hidden" value="<?php echo $id; ?>" />
                            <label>Tên Product Line</label>
                            <select class="form-control" name="lName[]">
                                <?php
                                    $productLine = new ProductLine();
                                    $countLine = $productLine -> getLinesProducts();
                                    foreach ($countLine as $key) {
                                   
                                ?>
                                <option value="<?php echo $key['line_id']; ?>"> <?php echo $key['line_name']; ?> </option>
                                <?php } ?>
                            </select>
                        </div>

                        <div id="append-line">

                        </div>

                        <div class="form-group">
                            <button type="button" id="more-line" onclick="moreLine()" class="btn btn-primary">Thêm nhiều product line</button>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Thêm product line</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </div>    
                    <form>
                </div>
            </div>
                <!-- /.row -->
        </div>
            <!-- /.container-fluid -->
    </div>

    <script type="text/javascript">
            function moreLine(){
                $('#append-line').append('<div class="form-group"><input class="form-control" name="productId" type="hidden" value="<?php echo $id; ?>" /><select class="form-control" name="lName[]"><?php $countLine = $productLine -> getLinesProducts();foreach ($countLine as $key) { ?> <option value="<?php echo $key['line_id']; ?>"> <?php echo $key['line_name']; ?> </option> <?php } ?> </select> </div>');
            }

    </script>
        <!-- /#page-wrapper -->

    <!-- end container -->
<?php include '../views/admin/footer.php'; ?>

