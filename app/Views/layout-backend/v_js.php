<!-- jQuery -->
<script src="<?= base_url(); ?>/assets-backend/plugins/jquery/jquery.min.js"></script>

<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url(); ?>/assets-backend/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>/assets-backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url(); ?>/assets-backend/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url(); ?>/assets-backend/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url(); ?>/assets-backend/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url(); ?>/assets-backend/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url(); ?>/assets-backend/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url(); ?>/assets-backend/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url(); ?>/assets-backend/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- Summernote -->
<script src="<?= base_url(); ?>/assets-backend/plugins/summernote/summernote-bs4.min.js"></script>
<!-- page script -->
<script>
  $(function() {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
<script>
  $(function() {
    // Summernote
    $('.textarea').summernote()
  })
</script>

<!-- daterangepicker -->
<script src="<?= base_url(); ?>/assets-backend/plugins/moment/moment.min.js"></script>
<script src="<?= base_url(); ?>/assets-backend/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url(); ?>/assets-backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url(); ?>/assets-backend/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url(); ?>/assets-backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>/assets-backend/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url(); ?>/assets-backend/dist/js/pages/dashboard.js"></script>
<!-- A   dminLTE for demo purposes -->
<script src="<?= base_url(); ?>/assets-backend/dist/js/demo.js"></script>
</body>
<html>