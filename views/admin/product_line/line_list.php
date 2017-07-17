<?php include '../views/admin/header.php'; ?>
<?php include '../views/admin/nav.php'; ?>
    <!-- container here -->
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Products lines
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
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Ký hiệu</th>
                                <th>Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $line = new ProductLine();
                                $data = $line -> getLinesProducts();
                                if(empty($data)){

                                }else{
                                foreach ($data as $key) {

                            ?>
                            <tr class="odd gradeX" align="center">
                                <td><?php echo $key['line_id']; ?></td>
                                <td><?php echo $key['line_name']; ?></td>
                                <td><?php echo $key['compact']; ?></td>

                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return delConfirm('Bạn có chắc muốn xóa Product line này')" href="?action=delLine&id=<?php echo $key['line_id']; ?>"> Delete</a> | <i class="fa fa-pencil fa-fw"></i> <a href="?action=editLine&id=<?php echo $key['line_id']; ?>">Edit</a></td>
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
