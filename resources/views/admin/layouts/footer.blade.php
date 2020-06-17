

<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">

  </footer>


<!-- /.content-wrapper -->
<footer class="main-footer">

    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.4
    </div>
  </footer>




<!-- jQuery 3 -->
<link rel="stylesheet" href="{{ url('design/adminlte') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<script src="{{ url('design/adminlte') }}/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="{{ url('design/adminlte') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ url('design/adminlte') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>



<!-- Bootstrap 3.3.7 -->
<script src="{{ url('/design/adminlte/plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="{{ url('/design/adminlte/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ url('/design/adminlte/plugins/morris.js/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ url('/design/adminlte/plugins/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ url('/design/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ url('/design/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ url('/design/adminlte/plugins/jquery-knob/dist/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ url('/design/adminlte/plugins/moment/min/moment.min.js') }}"></script>
<script src="{{ url('/design/adminlte/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ url('/design/adminlte/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ url('/design/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ url('/design/adminlte/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ url('/design/adminlte/plugins/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('/design/adminlte/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ url('/design/adminlte/dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('/design/adminlte/dist/js/demo.js') }}"></script>
<!-- JSTree -->
<script src="{{ url('design/adminlte/jstree/jstree.js') }}"></script>
<script src="{{ url('design/adminlte/jstree/jstree.wholerow.js') }}"></script>
<script src="{{ url('design/adminlte/jstree/jstree.checkbox.js') }}"></script>

<link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">


<!-- jQuery -->
<script src="{{ url('/adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ url('/adminlte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{ url('/design/adminlte/plugins/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ url('/design/adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ url('/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ url('/adminlte/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ url('/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ url('/adminlte/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ url('/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- CheckAll function -->
<script src="{{ url('/adminlte/dist/js/myFun.js')}}"></script>

<!-- DataTables -->
<link rel="stylesheet" href="{{ url('/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ url('/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<!-- DataTables -->
<script src="{{ url('adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ url('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ url('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ url('/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ url('') }}/vendor/datatables/buttons.server-side.js"></script>
<script src="{{ url('design/adminlte') }}/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="{{ url('/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>

@if(direction() == 'ltr')
<link rel="stylesheet" href="{{ url('/adminlte/dist/css/adminlte.min.css')}}">
@else 
<link rel="stylesheet" href="{{ url('/adminlteRTL/dist/css/adminlte.min.css')}}">
<link rel="stylesheet" href="{{ url('/adminlte/dist/css/bootstrap-rtl.min.css')}}">
<link rel="stylesheet" href="{{ url('/adminlte/dist/css/rtl.css')}}">
@endif

<script src="{{ url('/design/adminlte/dist/js/adminlte.min.js') }}"></script>


@stack('js')
@stack('css')

</body>
</html>