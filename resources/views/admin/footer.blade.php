<footer class="main-footer">
  <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="{{url('/')}}">4mann Industries Pvt. Ltd.</a> All Rights Reserved. Designed and Developed by : <a target="_blank" href="https://sirsonite.com/">Sirsonite Solutions Pvt. Ltd. </a></strong>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('assets/admin_assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/admin_assets/dist/js/adminlte.min.js')}}"></script>
<!-- bs-custom-file-input -->
<script src="{{asset('assets/admin_assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/admin_assets/dist/js/demo.js')}}"></script>

<script src="{{asset('assets/admin_assets/js/imageval.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function() {
    bsCustomFileInput.init();
  });
</script>
<!-- DataTables  & Plugins -->
<script src="{{asset('assets/admin_assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{asset('assets/admin_assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/admin_assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/admin_assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/admin_assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/admin_assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/admin_assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/admin_assets/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('assets/admin_assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/admin_assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/admin_assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/admin_assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/admin_assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App -->
<script>
  const base_url = "<?php echo url('/'); ?>";


  $(function() {
    bsCustomFileInput.init();

    var table = $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');


    var table = $("#example11").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
     // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');


  });
</script>

<script>
 $(function () {
    function summernotePlain(id) {
        $(id).summernote({
            height: 120,
            callbacks: {
                onPaste: function (e) {
                    e.preventDefault();
                    var text = (e.originalEvent || e).clipboardData.getData('text/plain');
                    // Remove formatting and insert plain text
                    document.execCommand("insertText", false, text);
                }
            }
        });
    }

    summernotePlain('#summernote');
    summernotePlain('#summernote1');
    summernotePlain('#summernote2');
    summernotePlain('#summernote3');
    summernotePlain('#summernote4');
    summernotePlain('#summernote5');
    summernotePlain('#summernote6');
    summernotePlain('#summernote7');
    summernotePlain('#summernote8');
    summernotePlain('#summernote9');
    summernotePlain('#summernote10');
});

</script>


</body>

</html>
