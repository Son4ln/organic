<?php include '../views/admin/header.php'; ?>
<?php include '../views/admin/nav.php'; ?>
    <!-- container here -->
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product Line
                            <small>Add</small>
                        </h1>
                    </div>
                    <div class="col-lg-12">
                      <div style="display: none;" id="alert-mes" class="alert alert-danger"></div>
                    </div>
                    
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="?action=addLineAction" method="POST">
                            <div class="col-lg-12" style="color: red; font-style: italic;">
                                <?php echo $alert; ?>
                            </div>

                            <div class="form-group">
                                <label>Tên dòng sản phẩm</label>
                                <input type="text" name="lineName" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Ký hiệu</label>
                                <input type="text" class="form-control" name="character" />
                            </div>
                            <button type="submit" class="btn btn-primary">Thêm dòng sản phẩm</button>
                            <button type="reset" class="btn btn-default">Reset</button>
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

