<?php include '../views/admin/header.php'; ?>
<?php include '../views/admin/nav.php'; ?>
    <!-- container here -->
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product Line
                            <small>Edit</small>
                        </h1>
                    </div>
                    <div class="col-lg-12">
                      <div style="display: none;" id="alert-mes" class="alert alert-danger"></div>
                    </div>
                    
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="?action=editLineAction" method="POST">
                            <?php
                                $lines = new ProductLine();
                                $data = $lines -> getLinesProductsById($lineId);
                             ?>

                            <div class="col-lg-12" style="color: red;font-style: italic;">
                                <?php echo $alert; ?>
                            </div>
                            <input type="hidden" name="lId" value="<?php echo $data['line_id']; ?>"  class="form-control">
                            <div class="form-group">
                                <label>Tên dòng sản phẩm</label>
                                <input type="text" name="lineName" class="form-control" value="<?php echo $data['line_name']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Ký hiệu</label>
                                <input class="form-control" name="character" value="<?php echo $data['compact']; ?>" />
                            </div>
                            <button type="submit" class="btn btn-primary">Sửa dòng sản phẩm</button>
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
