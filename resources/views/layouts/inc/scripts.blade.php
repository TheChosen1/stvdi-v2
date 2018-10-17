
<!-- jQuery -->
<script src="{{ url('/').'/plugins/jquery/jquery.min.js'}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ url('/').'/plugins/bootstrap/js/bootstrap.bundle.min.js'}}"></script>
<!-- Select2 -->
<script src="{{ url('/').'/plugins/select2/select2.full.min.js'}}"></script>
<!-- InputMask -->
<script src="{{ url('/').'/plugins/input-mask/jquery.inputmask.js'}}"></script>
<script src="{{ url('/').'/plugins/input-mask/jquery.inputmask.date.extensions.js'}}"></script>
<script src="{{ url('/').'/plugins/input-mask/jquery.inputmask.extensions.js'}}"></script>
<!-- AdminLTE App -->
<script src="{{ url('/').'/dist/js/adminlte.js'}}"></script>
<!-- DataTables -->
<script src="{{ url('/').'/plugins/datatables/jquery.dataTables.js'}}"></script>
<script src="{{ url('/').'/plugins/datatables/dataTables.bootstrap4.js'}}"></script>
<script src="{{ url('/').'/plugins/datatables/extensions/Buttons/js/dataTables.buttons.min.js'}}"></script>
<script src="{{ url('/').'/plugins/datatables/extensions/JSZip/jszip.min.js'}}"></script>
<script src="{{ url('/').'/plugins/datatables/extensions/pdfmake/pdfmake.min.js'}}"></script>
<script src="{{ url('/').'/plugins/datatables/extensions/pdfmake/vfs_fonts.js'}}"></script>
<script src="{{ url('/').'/plugins/datatables/extensions/Buttons/js/buttons.print.min.js'}}"></script>
<script src="{{ url('/').'/plugins/datatables/extensions/Buttons/js/buttons.html5.min.js'}}"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="{{ url('/').'/dist/js/demo.js'}}"></script>
<!-- SlimScroll -->
<script src="{{ url('/').'/plugins/slimScroll/jquery.slimscroll.min.js'}}"></script>
<!-- FastClick -->
<script src="{{ url('/').'/plugins/fastclick/fastclick.js'}}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{ url('/').'/plugins/iCheck/icheck.min.js'}}"></script>
<!-- SparkLine -->
<script src="{{ url('/').'/plugins/sparkline/jquery.sparkline.min.js'}}"></script>
<!-- jVectorMap -->
<script src="{{ url('/').'/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'}}"></script>
<script src="{{ url('/').'/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'}}"></script>
<!-- SlimScroll 1.3.0 -->
<script src="{{ url('/').'/plugins/slimScroll/jquery.slimscroll.min.js'}}"></script>
<!-- ChartJS 1.0.2 -->
<script src="{{ url('/').'/plugins/chartjs-old/Chart.min.js'}}"></script>

<!-- page script -->
<script>
  function showBtn(elementClass){
    $("button[class*='btn_']").hide();
    $('.'+elementClass).show();
  }

  function hideHtmlScroll(){
    $('html').css( "overflow-y", "hidden" );
  }

  //HIDE HTML ELEMENT-----
  function showHtmlScroll(){
    $('html').css( "overflow-y", "scroll" );
  }

  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2();
  
    //display filename of uploaded file
    $('.custom-file input').change(function (e) {
        $(this).next('.custom-file-label').html(e.target.files[0].name);
        // var files = [];
        // for (var i = 0; i < $(this)[0].files.length; i++) {
        //     files.push($(this)[0].files[i].name);
        // }
        // $(this).next('.custom-file-label').html(files.join(', '));
    });
    
    //iCheck for checkbox and radio inputs
    // $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
    //   checkboxClass: 'icheckbox_minimal-blue',
    //   radioClass   : 'iradio_minimal-blue'
    // }); 

    $('.list-table').DataTable({
      dom: '<"row"<"col-sm-4"l><"col-sm-4"><"col-sm-4"f>>rt<"row"<"col-sm-6"i><"col-sm-6"p>>',
    });

    $('.report-table').DataTable({
      dom: '<"row"<"col-sm-4"l><"col-sm-4"B><"col-sm-4"f>>rt<"row"<"col-sm-6"i><"col-sm-6"p>>',
      buttons: [
          {
              extend:    'print',
              text:      '<i class="fa fa-print"></i>',
              titleAttr: 'Print'
          },
          {
              extend:    'excel',
              text:      '<i class="fa fa-file-excel"></i>',
              titleAttr: 'Excel'
          },
          {
              extend:    'csv',
              text:      '<i class="fa fa-file"></i>',
              titleAttr: 'CSV'
          },
          {
              extend:    'pdf',
              text:      '<i class="fa fa-file-pdf"></i>',
              titleAttr: 'PDF'
          }
      ]
    });
    $('.dt-buttons button').removeClass('btn-secondary').addClass('btn-default');
  });

    // $('#example2').DataTable({

    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false
    // });
  // });
</script>

<!-- PAGE SCRIPTS --><!-- 
<script src="dist/js/pages/dashboard2.js"></script> -->