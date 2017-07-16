<?php include '../views/admin/header.php'; ?>
<?php include '../views/admin/nav.php'; ?>
    <!-- container here -->
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Origin
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->

                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="?action=originAddAction" method="POST">
                            <div class="form-group">
                                <label>Nguồn gốc</label>
                                <div class="col-lg-12" style="color: red; font-style: italic;">
                                    <?php echo $alert; ?>
                                </div>
                                <input type="text" name="origin" class="form-control" />
                            </div>

                            <button type="submit" class="btn btn-primary">Thêm nguồn gốc</button>
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
