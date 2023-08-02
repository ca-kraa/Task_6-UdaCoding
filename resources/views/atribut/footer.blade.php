

<aside class="control-sidebar control-sidebar-dark">
</aside>
</div>
<script src="{{ asset('assets/AdminLTE') }}/plugins/jquery/jquery.min.js"></script>
<script src="{{ asset('assets/AdminLTE') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{ asset('assets/AdminLTE') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/AdminLTE') }}/plugins/chart.js/Chart.min.js"></script>
<script src="{{ asset('assets/AdminLTE') }}/plugins/sparklines/sparkline.js"></script>
<script src="{{ asset('assets/AdminLTE') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ asset('assets/AdminLTE') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="{{ asset('assets/AdminLTE') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="{{ asset('assets/AdminLTE') }}/plugins/moment/moment.min.js"></script>
<script src="{{ asset('assets/AdminLTE') }}/plugins/daterangepicker/daterangepicker.js"></script>
<script src="{{ asset('assets/AdminLTE') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="{{ asset('assets/AdminLTE') }}/plugins/summernote/summernote-bs4.min.js"></script>
<script src="{{ asset('assets/AdminLTE') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="{{ asset('assets/AdminLTE') }}/dist/js/adminlte.js"></script>
<script src="{{ asset('assets/AdminLTE') }}/dist/js/demo.js"></script>
<script src="{{ asset('assets/AdminLTE') }}/dist/js/pages/dashboard.js"></script>
<script src="{{ asset('assets/AdminLTE') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('assets/AdminLTE') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('assets/AdminLTE') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('assets/AdminLTE') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('assets/AdminLTE') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('assets/AdminLTE') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('assets/AdminLTE') }}/plugins/jszip/jszip.min.js"></script>
<script src="{{ asset('assets/AdminLTE') }}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('assets/AdminLTE') }}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('assets/AdminLTE') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('assets/AdminLTE') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('assets/AdminLTE') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
  function updateClock() {
    const clockElement = document.getElementById('clock');
    const currentTime = new Date();
    const hours = currentTime.getHours().toString().padStart(2, '0');
    const minutes = currentTime.getMinutes().toString().padStart(2, '0');
    const seconds = currentTime.getSeconds().toString().padStart(2, '0');
    const timeString = hours + ':' + minutes + ':' + seconds + ' WIB';
    clockElement.textContent = timeString;
  }
  setInterval(updateClock, 1000);
  updateClock();
</script>

</body>
</html>
