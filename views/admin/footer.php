</div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="public/admin/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="public/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="public/admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="public/admin/dist/js/sb-admin-2.js"></script>
    <script src="public/admin/js/admin.js"></script>
    <!-- DataTables JavaScript -->
    <script src="public/admin/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="public/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <!--<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.15/datatables.min.js"></script>-->
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
            });
        $('#add-order').click(function(){
            $('#append-order-here').append('<div class="form-group"><label>Sản phẩm</label><select class="form-control" name="productId[]"><option value="0">Chưa chọn sản phẩm</option><?php $product = new Products(); $data = $product -> getProducts(); foreach ($data as $key) { ?> <option value="<?php echo $key['product_id']; ?>"> <?php echo $key['product_name']; ?> </option> <?php } ?> </select></div><div class="form-group"><label>Số lượng</label><input class="form-control" type="number" name="quantity[]" value="1" placeholder="Nhập số lượng" /></div>');

        });

        $('#add-more-product').click(function(){
            $('#append-more-product-here').append('<div class="form-group"><select class="form-control" name="productId[]"><option value="0">Chưa chọn sản phẩm</option><?php $data = $product -> getProducts();foreach ($data as $key) { ?><option value="<?php echo $key['product_id']; ?>"><?php echo $key['product_name']; ?></option><?php } ?></select></div>');

        });

        $('#add-form').click(function(){
            $('#append-here').append('<div class="form-group"><select class="form-control" name="prodId[]"> <option value="0">Chưa chọn sản phẩm</option> <?php $dataProducts = $product -> getProducts(); foreach ($dataProducts as $value) {?><option value="<?php echo $value['product_id']; ?>"> <?php echo $value['product_name']; ?> </option><?php } ?></select></div>');
        });

    });

    </script>
</body>

</html>