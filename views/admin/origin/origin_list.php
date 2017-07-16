<?php include '../views/admin/header.php'; ?>
<?php include '../views/admin/nav.php'; ?>
    <!-- container here -->
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Origin
                            <small>List</small>
                        </h1>
                    </div>
                    <div class="col-lg-12">
                        <div class="alert" id="showMes"></div>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>Origin Id</th>
                                <th>Họ Tên</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                             <?php
                                $origin = new Origin();
                                $data = $origin -> getOrigin();
                                if(empty($data)){

                                }else{
                                 foreach ($data as $key) {

                            ?>
                            <tr class="odd gradeX" align="center">
                                <td><?php echo $key['origin_id']; ?></td>
                                <td><?php echo $key['name_of_origin']; ?></td>
                                <td>
                                <i class="fa fa-pencil fa-fw"></i> <a href="?action=originEdit&id=<?php echo $key['origin_id']; ?>">Edit</a> |
                                <i class="fa fa-trash-o  fa-fw" ></i><a onclick="return delConfirm ('Bạn có chắc muốn xóa hóa đơn này');" href="?action=originDel&id=<?php echo $key['origin_id']; ?>"> Delete</a></td>
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
