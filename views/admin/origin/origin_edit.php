<?php include '../views/admin/header.php'; ?>
<?php include '../views/admin/nav.php'; ?>
    <!-- container here -->
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Origin
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="?action=originEditAction" method="POST">
                            <?php
                                $origin = new Origin();
                                $data = $origin -> getOriginShowById($originId);
                             ?>
                            <div class="form-group">
                                <label>Nguồn gốc</label>
                                <div class="col-lg-12" style="color: red; font-style: italic;">
                                  <?php echo $alert; ?>
                                </div>
                                <input class="form-control" type="hidden" name="originId" value="<?php echo $data['origin_id']; ?>" />
                                <input class="form-control" name="originName" value="<?php echo $data['name_of_origin']; ?>" />
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Sửa Origin</button>
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
