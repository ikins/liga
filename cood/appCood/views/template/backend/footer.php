<footer class="main-footer">
    <div class="container text-center">
      <strong>&copy; <?php echo date('Y'); ?></strong> All rights
      reserved. Developed by webcood.com
    </div>
    <!-- /.container -->
</footer>

<div class="modal modal-success fade" id="modal-success">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Info Proses Sukses</h4>
          </div>
      <div class="modal-body">
          <p><i class="fa fa-check"></i> <?php echo $this->session->flashdata('msg'); ?></p>
      </div>
      </div>
  </div>
</div>

<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="<?php echo base_url("assets/theme/"); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url("assets/theme/"); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Chart -->
<script src="<?php echo base_url("assets/theme/"); ?>bower_components/chart.js/Chart.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url("assets/theme/"); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url("assets/theme/"); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url("assets/theme/"); ?>dist/js/adminlte.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url("assets/theme/"); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url("assets/theme/"); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url("assets/theme/"); ?>bower_components/datatables.net/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url("assets/theme/"); ?>bower_components/datatables.net/js/jszip.min.js"></script>
<script src="<?php echo base_url("assets/theme/"); ?>bower_components/datatables.net/js/pdfmake.min.js"></script>
<script src="<?php echo base_url("assets/theme/"); ?>bower_components/datatables.net/js/vfs_fonts.js"></script>
<script src="<?php echo base_url("assets/theme/"); ?>bower_components/datatables.net/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url("assets/theme/"); ?>bower_components/datatables.net/js/buttons.print.min.js"></script>
<script src="<?php echo base_url("assets/theme/"); ?>dist/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url("assets/theme/"); ?>dist/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url("assets/theme/"); ?>dist/js/responsive.bootstrap.min.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url("assets/theme/"); ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url("assets/theme/"); ?>dist/js/demo.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url("assets/theme/"); ?>dist/js/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script src="<?php echo base_url("assets/theme/"); ?>plugins/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url("assets/"); ?>js/summernote.js"></script>
<script src="<?php echo base_url("assets/"); ?>js/custom.js"></script>
<?php if($this->session->flashdata('msg')) : ?>
<script>
  $(function () {
    $(window).on('load',function(){
          $('#modal-success').modal('show');
        });
  }); 
</script>
<?php endif; ?>
<script>
  $(function () {
    $('#info').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script type="text/javascript">
    $(document).ready(function() {

      $('.summernote').summernote({

        height: 300,
        tabsize: 2

      });
      
    });
</script>
</body>
</html>